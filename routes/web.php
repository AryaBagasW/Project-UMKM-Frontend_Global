<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TambahController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProdukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// API routes
Route::get('/managemen-umkm', [ApiController::class, 'getUmkm'])->name('getUmkm');
Route::get('/edit-umkm/{id}', [ApiController::class, 'editUmkm'])->name('editUmkm');
Route::put('/edit-umkm/{id}', [ApiController::class, 'updateUmkm'])->name('updateUmkm');


Route::get('/managemen-produk', [ProdukController::class, 'getProduk'])->name('getProduk');


// Dashboard routes
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
//Route::get('/test', [TestController::class, 'index'])->name('test');

// Tambah routes
    //Route::get('/umkm', [TambahController::class, 'umkm'])->name('tambah-umkm');
    Route::get('/produk', [TambahController::class, 'produk'])->name('tambah-produk');
    Route::get('/user', [TambahController::class, 'user'])->name('tambah-user');
    Route::get('/', [TambahController::class, 'index'])->name('tambah');

// Edit routes
    Route::get('/', [EditController::class, 'index'])->name('edit');
    //Route::get('/umkm', [EditController::class, 'umkm'])->name('edit-umkm');
    //Route::get('/produk', [EditController::class, 'produk'])->name('edit-produk');
    Route::get('/user', [EditController::class, 'user'])->name('edit-user');

// Halaman routes
    Route::get('/login', [HalamanController::class, 'login'])->name('login');
    Route::get('/managemen-user', [HalamanController::class, 'user'])->name('managemen-user');
    //Route::get('/umkm', [HalamanController::class, 'umkm'])->name('umkm');
    //Route::get('/managemen-produk', [HalamanController::class, 'produk'])->name('managemen-produk');
    Route::get('/registrasi', [HalamanController::class, 'registrasi'])->name('registrasi');
    Route::get('/detail', [HalamanController::class, 'detail'])->name('detail');
    Route::get('/profile', [HalamanController::class, 'profile'])->name('profile');
