@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@include('layouts.navbars.topnav')

<div class="container md-1">
    <div class="card full-page-card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0">Daftar Umkm</h4>
            <div class="d-flex align-items-center">
                <div>
                    <input type="text" class="form-control" placeholder="Filter by name" id="nameFilter">
                </div>
            </div>
        </div>
        <div class="card-body p-3">
            <div class="table-responsive">
                <table class="table tablesorter" id="exampleTable">
                    <thead class="text-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Deskripsi Produk</th>
                            <th>Harga</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Test</td>
                            <td>Test</td>
                            <td>Test</td>
                            <td>Test</td>
                            <td>Test</td>
                        </tr>
                        <tr>
                            <td>Test</td>
                            <td>Test</td>
                            <td>Test</td>
                            <td>Test</td>
                            <td>Test</td>
                        </tr>
                        <tr>
                            <td>Test</td>
                            <td>Test</td>
                            <td>Test</td>
                            <td>Test</td>
                            <td>Test</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
