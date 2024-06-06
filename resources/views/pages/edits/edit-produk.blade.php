@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

<div class="container mt-5 pt-4">
    <h1 class="breadcrumb-item active" aria-current="page">
        Edit
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                Edit UMKM
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
                    <h3 class="card-title mb-4">Edit Produk</h3>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Nama Produk <span class="badge badge-wajib text-xxs">Wajib</span></h4>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="product_name" class="form-control" placeholder="Contoh: Tas Wanita (Jenis UMKM) + Modhis (Merek) + Putih (Keterangan)" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Deskripsi Produk <span class="badge badge-wajib text-xxs">Wajib</span></h4>
                                </div>
                                <div class="col-md-4">
                                    <textarea name="description" class="form-control" rows="5" placeholder="Deskripsi UMKM" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Harga Satuan <span class="badge badge-wajib text-xxs">Wajib</span></h4>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" name="price" class="form-control" placeholder="Contoh: 50000" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Masa Berlaku<span class="badge badge-wajib text-xxs">Wajib</span></h4>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="validity" class="form-control" placeholder="Contoh: 12 Bulan" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Foto Produk <span class="badge badge-wajib text-xxs">Wajib</span></h4>
                                </div>
                                <div class="col-md-4">
                                    <input type="file" name="product_image" class="form-control" accept="image/jpeg, image/png, image/jpg">
                                    <p class="mt-2">Foto saat ini:</p>
                                    <img src="" alt="Foto UMKM" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Publikasi</h4>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="publishSwitch" name="publish">
                                        <label class="form-check-label" for="publishSwitch">Publish</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <a href="{{ route('produk') }}" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
