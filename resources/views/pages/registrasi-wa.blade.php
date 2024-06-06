@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('breadcrumb', 'registrasi-wa')
@include('layouts.navbars.topnav')

<div class="container mt-5 pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Registrasi WhatsApp</h2>
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Nomor WhatsApp</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-whatsapp"></i></span>
                                <input type="text" class="form-control" id="phoneNumber" placeholder="Masukkan Nomor WhatsApp">
                            </div>
                            <small class="form-text text-muted">Pastikan nomor WhatsApp yang anda masukkan aktif.</small>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <small class="form-text text-muted">Gunakan nama asli sesuai dengan identitas resmi.</small>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
                            </div>
                            <small class="form-text text-muted">Email yang aktif untuk keperluan verifikasi.</small>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

