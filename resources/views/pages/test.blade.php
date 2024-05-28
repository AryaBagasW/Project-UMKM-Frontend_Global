@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('breadcrumb', 'test')
@include('layouts.navbars.sidenav')
@include('layouts.navbars.topnav')

<div class="container mt-5 pt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <h3>Nama Produk</h3>
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <p>Masukkan dengan nama yang menarik dan mudah ditemukan oleh pembeli, bisa tambahkan merek, dan keterangan produk seperti warna, bahan, atau ukuran</p>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Contoh: Tas Wanita (Jenis produk) + Modhis (Merek) + Putih (Keterangan)">
                    </div>
                </div>
            </div>
            <div class="container">
                <h3>Deskripsi Produk</h3>
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <p>Masukkan dengan penjelasan secara detail dan informatif terkait produk yang dipublikasikan agar pembeli mudah mengerti produkmu</p>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Tas Wanita Modhis Putih">
                    </div>
                </div>
            </div>
            <div class="container">
                <h3>Harga Satuan</h3>
                <div class="row align-items-center mb-3">
                    <div class="col"></div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-text">Rp.</span>
                            <input type="text" class="form-control" placeholder="Masukkan Harga">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <h3>Masa Berlaku</h3>
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <p>Masukkan masa berlaku barang jika berupa barang yang bersifat dapat dikonsumsi</p>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="1 Mei 2024">
                    </div>
                </div>
            </div>
            <div class="container">
                <h3>Foto Produk</h3>
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <p>Format gambar jpg, jpeg, png dan ukuran maksimum 5mb</p>
                    </div>
                    <div class="col-md-4">
                        <input type="file" class="form-control" accept="image/jpeg, image/png, image/jpg">
                    </div>
                </div>
            </div>
            <div class="container text-end">
                <button class="btn btn-success">Simpan</button>
            </div>
        </div>
    </div>
</div>