<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
    protected $blogModel;
    public function __construct()
    {
        $this->blogModel = new BlogModel();
    }

    public function index()
    {
        // $blog = $this->blogModel->findAll();

        $data = [
            'blog' => $this->blogModel->getBlog()
        ];

        return view('admin/dashboard', $data);
    }

    public function detail($slug)
    {
        // $blog = $this->blogModel->getBlog($slug);

        $data = [
            'blog' => $this->blogModel->getBlog($slug)

        ];

        return view('/admin/detail', $data);
    }

    public function create()
    {
        $data = [
            'validation' => session('validation') ?? \Config\Services::validation()
        ];

        return view('/admin/create', $data);
    }

    public function save()
    {
        // Validasi Input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[blog.judul]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah dibuat'
                ]
            ],

            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],

            'gambar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],

            'konten' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {

            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('/create')->withInput()->with('validation', $validation);
        }

        $this->blogModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $this->request->getVar('slug'),
            'penulis' => $this->request->getVar('penulis'),
            'gambar' => $this->request->getVar('gambar'),
            'konten' => $this->request->getVar('konten'),
            'jumlah_komentar' => $this->request->getVar('jumlah_komentar'),
            'created_at' => $this->request->getVar('created_at'),
            'updated_at' => $this->request->getVar('updated_at')
        ]);

        session()->setFlashdata('pesan', 'Blog Berhasil di Tambahkan');

        return redirect()->to('/dashboard');
    }

    public function delete($id)
    {
        $this->blogModel->delete($id);

        return redirect()->to('/dashboard');
    }
}