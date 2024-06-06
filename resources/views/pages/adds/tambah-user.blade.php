@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

<div class="container mt-5 pt-4">
    <h1 class="breadcrumb-item active" aria-current="page">
        Tambah User
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('managemen-user') }}">Manajemen User</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                Tambah User
            </li>
        </ol>
    </nav>
</div>
@include('layouts.navbars.topnav')
@include('layouts.navbars.sidenav')

<div class="container mt-5 pt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-4">Tambah Produk</h3>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Nama UMKM <span class="badge badge-wajib text-xxs">Wajib</span></h4>
                                    <p>Masukkan dengan nama yang menarik dan mudah ditemukan oleh pembeli, bisa tambahkan merek, dan keterangan produk seperti warna, bahan, atau ukuran</p>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="product_name" class="form-control" placeholder="Contoh: UMKM 1" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Nomor Kontak <span class="badge badge-wajib text-xxs">Wajib</span></h4>
                                    <p>Masukkan nomor kontak yang dapat dihubungi untuk informasi lebih lanjut terkait produkmu</p>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="contact_number" class="form-control" placeholder="Contoh: 0123456789" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Alamat <span class="badge badge-wajib text-xxs">Wajib</span></h4>
                                    <p>Masukkan alamat lengkap tempat UMKM berada</p>
                                </div>
                                <div class="col-md-4">
                                    <textarea name="address" class="form-control" placeholder="Contoh: Jl. Cempaka No. 123, Pacitan" required></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="mb-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Publish/Unpublish</h4>
                                    <p>Tentukan apakah produk ini akan dipublikasikan atau tidak</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="publishSwitch" name="publish" value="1" checked>
                                        <label class="form-check-label" for="publishSwitch">Publish</label>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="text-end">
                            <a href="{{'managemen-user'}}" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
