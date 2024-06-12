<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index(string $page)
    {
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}");
        }

        return abort(404);
    }

    public function produk()
    {
        return view("pages.managemen-produk");
    }

    public function umkm()
    {
        return view("pages.managemen-umkm");
    }

    public function registrasi()
    {
        return view("pages.registrasi-wa");
    }

    public function detail()
    {
        return view("pages.detail-produk");
    }

    public function user()
    {
        return view("pages.managemen-user");
    }

    public function profile()
    {
        return view("pages.profile");
    }
    
    public function login()
    {
        return view("pages.login");
    }
}
