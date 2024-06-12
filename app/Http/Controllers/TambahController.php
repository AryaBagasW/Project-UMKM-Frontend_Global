<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahController extends Controller
{
    public function index()
    {
        return view('pages.adds.tambah');
    }

    public function user()
    {
        return view('pages.adds.tambah-user');
    }

    public function produk()
    {
        return view('pages.adds.tambah-produk');
    }

    public function umkm()
    {
        return view('pages.adds.tambah-umkm');
    }
}
