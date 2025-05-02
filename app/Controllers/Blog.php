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
        $data = [
            'blog' => $this->blogModel->getBlog(),
            'pesan' => session()->getFlashdata('pesan')
        ];

        return view('admin/dashboard', $data);
    }

    public function detail($slug)
    {
        $data = [
            'blog' => $this->blogModel->getBlog($slug)
        ];

        return view('admin/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Blog',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[universitas.judul]',
                'errors' => [
                    'required' => 'Judul harus diisi',
                    'is_unique' => 'Judul sudah terdaftar'
                ]
            ],
            'gambar' => [
                'rules' => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'is_image' => 'File harus berupa gambar',
                    'mime_in' => 'Gambar harus berformat JPG, JPEG, atau PNG'
                ]
            ]
        ])) {
            return redirect()->to('/admin/create')->withInput();
        }

        // Upload gambar
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'defaultuniv.jpg'; // Fix typo disini
        } else {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move(ROOTPATH . 'public/img/', $namaGambar);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->blogModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'gambar' => $namaGambar,
            'deskripsi' => $this->request->getVar('deskripsi')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $blog = $this->blogModel->find($id);

        if ($blog) {
            if ($blog['gambar'] != 'defaultuniv.jpg') { // Harus konsisten .jpg
                $filePath = ROOTPATH . 'public/img/' . $blog['gambar'];
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }

            $this->blogModel->delete($id);
            session()->setFlashdata('pesan', 'Data berhasil dihapus!');
        }

        return redirect()->to('/admin');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Blog',
            'validation' => \Config\Services::validation(),
            'blog' => $this->blogModel->where('slug', $slug)->first()
        ];

        return view('admin/edit', $data);
    }

    public function update($id)
    {
        $blogLama = $this->blogModel->find($id);

        if ($blogLama['judul'] == $this->request->getVar('judul')) {
            $rulesJudul = 'required';
        } else {
            $rulesJudul = 'required|is_unique[universitas.judul]';
        }

        if (!$this->validate([
            'judul' => [
                'rules' => $rulesJudul,
                'errors' => [
                    'required' => 'Judul harus diisi',
                    'is_unique' => 'Judul sudah terdaftar'
                ]
            ],
            'gambar' => [
                'rules' => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'is_image' => 'File harus berupa gambar',
                    'mime_in' => 'Gambar harus berformat JPG, JPEG, atau PNG'
                ]
            ]
        ])) {
            return redirect()->to('/admin/edit/' . $blogLama['slug'])->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move(ROOTPATH . 'public/img/', $namaGambar);

            if ($this->request->getVar('gambarLama') != 'defaultuniv.jpg') {
                $filePath = ROOTPATH . 'public/img/' . $this->request->getVar('gambarLama');
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->blogModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'gambar' => $namaGambar,
            'deskripsi' => $this->request->getVar('deskripsi')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah!');
        return redirect()->to('/admin');
    }
}