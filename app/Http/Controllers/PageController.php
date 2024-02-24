<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'NIM: 2241720039 <br> Nama: Riska Kurnia Triwulandari';
    }

    public function articles($id)
    {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
