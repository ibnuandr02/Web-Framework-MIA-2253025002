<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table      = 'universitas';

    protected $allowedFields = ['judul', 'slug', 'gambar', 'deskripsi'];

    protected $useTimestamps = true;
    
    public function getBlog($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}