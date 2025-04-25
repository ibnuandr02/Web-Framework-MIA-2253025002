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
            'blog' => $this->blogModel->getBlog()
        ];

        return view('admin/dashboard', $data);
    }

    public function detail($slug)
    {

        $data = [
            'blog' => $this->blogModel->getBlog($slug)
        

        ];

        return view('/admin/detail', $data);
    }

    public function create()
    {

        $data = [
            'title' => 'Form tambah data universitas'

        ];

        return view('/admin/create', $data);
    }

    public function save()
    {
        
        if(!$this->validate([
            'judul' => 'required|is_unique[blog.judul]'
        ])) {
            return redirect()->to('/admin');
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->blogModel->save([
            'judul' => $this-> request->getVar('judul'),
            'slug' => $slug,
            'gambar' => $this->request->getVar('gambar'),
            'deskripsi' =>$this->request->getVar('deskripsi'),
        ]);

        return redirect()->to('/admin');

    }

    public function delete($id)
    {
        $this->BlogModel->delete($id);
        return redirect()->to('/admin');
    }
  
}