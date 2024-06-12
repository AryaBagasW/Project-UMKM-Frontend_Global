@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@include('layouts.navbars.topnav')
@include('layouts.navbars.sidenav')

<div class="container mt-5 pt-4">
    <h1>
        Tambah Produk
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('managemen-produk') }}">manajemen-produk</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                Tambah Produk
            </li>
        </ol>
    </nav>
</div>
<div class="container mt-5 pt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-4">Tambah Produk</h3>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Nama Produk<span class="badge badge-wajib text-xxs">Wajib</span></h4>
                                    <p>Masukkan dengan nama yang menarik dan mudah ditemukan oleh pembeli,
                                        bisa tambahkan merek, dan keterangan produk seperti warna, bahan, atau ukuran
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="product_name" class="form-control"
                                        placeholder="Contoh: Tas Wanita (Jenis produk) + Modhis (Merek) + Putih (Keterangan)"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Deskripsi Produk<span class="badge badge-wajib text-xxs">Wajib</span></h4>
                                    <p>Masukkan dengan penjelasan secara detail dan informatif terkait produk yang
                                        dipublikasikan agar pembeli mudah mengerti produkmu</p>
                                </div>
                                <div class="col-md-4">
                                    <textarea name="product_description" class="form-control" placeholder="Deskripsi Produk" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Harga Satuan<span class="badge badge-wajib text-xxs">Wajib</span></h4>
                                </div>
                            </div>
                            <div class="input-group">
                                    <span class="input-group-text">Rp.</span>
                                    <input type="number" name="price" class="form-control"
                                        placeholder="Masukkan Harga" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Masa Berlaku<span class="badge badge-wajib text-xxs">Wajib</span></h4>
                                    <p>Masukkan masa berlaku barang jika berupa barang yang bersifat dapat dikonsumsi
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <input type="date" name="expiry_date" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Foto Produk<span class="badge badge-wajib text-xxs">Wajib</span></h4>
                                    <p>Format gambar jpg, jpeg, png dan ukuran maksimum 5mb</p>
                                </div>
                                <div class="col-md-4">
                                    <input type="file" name="product_image" class="form-control"
                                        accept="image/jpeg, image/png, image/jpg" required>
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <a href="{{ 'managemen-produk' }}" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
