@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@include('layouts.navbars.authtopnav')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile and Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5 pt-4">
        <h1>Profile UMKM</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile UMKM</li>
            </ol>
        </nav>
    </div>

    <div class="container mt-5 pt-4">
        <div class="row justify-content-center">
            <!-- Profile Card Column -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="https://us-tuna-sounds-images.voicemod.net/78d048fd-10c4-4ac3-b43e-6500b980b118-1702929016185.png"
                            alt="Profile Image" class="img-fluid rounded-circle mb-3" width="150">
                        <h5 class="card-title">Arya Bagas</h5>
                        <p class="card-text">Info singkat tentang pengguna di sini.</p>
                        <div class="mb-3">
                            <label for="profileImageInput" class="btn btn-primary">Upload Foto</label>
                            <input type="file" id="profileImageInput" name="profile_image"
                                class="form-control-file d-none" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Column -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4>Nama</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="product_name" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4>Kategori</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <textarea name="product_description" class="form-control" placeholder="Deskripsi Produk" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4>Deskripsi</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <textarea name="product_description" class="form-control" placeholder="Deskripsi Produk" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4>Alamat</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <textarea name="product_description" class="form-control" placeholder="Deskripsi Produk" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4>Nomor Kontak</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <textarea name="product_description" class="form-control" placeholder="Deskripsi Produk" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4>NPWP</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <textarea name="product_description" class="form-control" placeholder="Deskripsi Produk" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4>Jam Buka</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="time" name="expiry_date" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4>Dokumen</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="file" name="product_image" class="form-control"
                                            accept="image/jpeg, image/png, image/jpg" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="publishSwitch" name="publish">
                                <label class="form-check-label" for="publishSwitch">Publish</label>
                            </div>

                            <div class="text-end">
                                <a href="{{ route('managemen-produk') }}" class="btn btn-secondary">Batal</a>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>