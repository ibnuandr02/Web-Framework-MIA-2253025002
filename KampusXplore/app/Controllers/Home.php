<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function about(): string
    {
        return view('about');
    }

    public function contact(): string
    {
        return view('contact');
    }

    public function semua(): string
    {
        return view('semua');
    }

    public function unimal(): string
    {
        return view('unimal');
    }

    public function selamatdatang(): string
    {
        return view('selamatdatang');
    }

    public function mengapa(): string
    {
        return view('mengapa');
    }

    public function apa(): string
    {
        return view('apa');
    }
}
