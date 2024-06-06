<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TambahController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HalamanController;

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
});


Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/test', [TestController::class, 'index'])->name('test');

Route::get('/tambah-umkm', [TambahController::class, 'umkm'])->name('tambah-umkm');
Route::get('/tambah-user', [TambahController::class, 'user'])->name('tambah-user');
Route::get('/tambah', [TambahController::class, 'index'])->name('tambah');

Route::get('/edit', [EditController::class, 'index'])->name('edit');
Route::get('/edit-umkm', [EditController::class, 'umkm'])->name('edit-umkm');
Route::get('/edit-produk', [EditController::class, 'produk'])->name('edit-produk');
Route::get('/edit-user', [EditController::class, 'user'])->name('edit-user');

Route::get('/managemen-user',[HalamanController::class, 'user'])->name('managemen-user');
Route::get('/umkm', [HalamanController::class, 'umkm'])->name('umkm');
Route::get('/produk', [HalamanController::class, 'produk'])->name('produk');
Route::get('/registrasi', [HalamanController::class, 'registrasi'])->name('wa');
Route::get('/detail', [HalamanController::class, 'detail'])->name('detail');

