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
        return view("pages.produk");
    }

    public function umkm()
    {
        return view("pages.umkm");
    }
}
