@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

<div class="container mt-5 pt-4">
    <h1 class="breadcrumb-item active" aria-current="page">
        Tambah
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                Tambah
            </li>
        </ol>
    </nav>
</div>
@include('layouts.navbars.topnav')

<div class="container mt-5 pt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-4">Tambah Produk</h3>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <h4>Nama Produk</h4>
                            <p>Masukkan dengan nama yang menarik dan mudah ditemukan oleh pembeli, bisa tambahkan merek, dan keterangan produk seperti warna, bahan, atau ukuran</p>
                            <input type="text" name="product_name" class="form-control" placeholder="Contoh: Tas Wanita (Jenis produk) + Modhis (Merek) + Putih (Keterangan)" required>
                        </div>

                        <div class="mb-4">
                            <h4>Deskripsi Produk</h4>
                            <p>Masukkan dengan penjelasan secara detail dan informatif terkait produk yang dipublikasikan agar pembeli mudah mengerti produkmu</p>
                            <textarea name="product_description" class="form-control" placeholder="Deskripsi Produk" required></textarea>
                        </div>

                        <div class="mb-4">
                            <h4>Harga Satuan</h4>
                            <div class="input-group">
                                <span class="input-group-text">Rp.</span>
                                <input type="number" name="price" class="form-control" placeholder="Masukkan Harga" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h4>Masa Berlaku</h4>
                            <p>Masukkan masa berlaku barang jika berupa barang yang bersifat dapat dikonsumsi</p>
                            <input type="date" name="expiry_date" class="form-control">
                        </div>

                        <div class="mb-4">
                            <h4>Foto Produk</h4>
                            <p>Format gambar jpg, jpeg, png dan ukuran maksimum 5mb</p>
                            <input type="file" name="product_image" class="form-control" accept="image/jpeg, image/png, image/jpg" required>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

