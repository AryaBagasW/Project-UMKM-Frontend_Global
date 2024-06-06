<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index()
    {
        return view('pages.edits.edit');
    }

    public function umkm()
    {
        return view('pages.edits.edit-umkm');
    }

    public function produk()
    {
        return view('pages.edits.edit-produk');
    }

    public function user()
    {
        return view('pages.edits.edit-user');
    }
}
