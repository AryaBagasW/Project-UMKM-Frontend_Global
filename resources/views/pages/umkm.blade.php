@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('breadcrumb', 'umkm')
@include('layouts.navbars.topnav')

<div class="container-fluid mt-5 pt-4">
    <div class="row">
        <div class="col">
            @include('layouts.navbars.sidenav')
        </div>

        <div class="col-md-9">
            <div class="card full-page-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Daftar Umkm</h4>
                    <div class="d-flex align-items-center">
                        <div class="dropdown me-2">
                            <!--<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Test1
                            </button>
                             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#" onclick="selectOption('Test1', 'dummy1')">Test1</a></li>
                                <li><a class="dropdown-item" href="#" onclick="selectOption('Test2', 'dummy2')">Test2</a></li>
                                <li><a class="dropdown-item" href="#" onclick="selectOption('Test3', 'dummy3')">Test3</a></li>
                            </ul> -->
                            <a href="{{'tambah'}}">
                                <button class="btn btn-success me-2">Tambah</button>
                            </a>
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
                                    <th>NPWN</th>
                                    <th>Nama UMKM</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="changeable">Test</td>
                                    <td class="changeable">Test</td>
                                    <td class="changeable">Test</td>
                                    <td class="changeable">Test</td>
                                    <td>
                                        <button class="btn btn-success btn-sm" >Detail</button>
                                        <a href="{{'edit'}}">
                                            <button class="btn btn-primary btn-sm me-2">Ubah</button>
                                        </a>
                                        <button class="btn btn-danger btn-sm" onclick="deleteAction()">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="changeable">Test</td>
                                    <td class="changeable">Test</td>
                                    <td class="changeable">Test</td>
                                    <td class="changeable">Test</td>
                                    <td>
                                        <button class="btn btn-success btn-sm" >Detail</button>
                                        <a href="{{'edit'}}">
                                            <button class="btn btn-primary btn-sm me-2" onclick="editAction()">Ubah</button>
                                        </a>
                                        <button class="btn btn-danger btn-sm" onclick="deleteAction()">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="changeable">Test</td>
                                    <td class="changeable">Test</td>
                                    <td class="changeable">Test</td>
                                    <td class="changeable">Test</td>
                                    <td>
                                        <button class="btn btn-success btn-sm" >Detail</button>
                                        <a href="{{'edit'}}">
                                            <button class="btn btn-primary btn-sm me-2" onclick="editAction()">Ubah</button>
                                        </a>
                                        <button class="btn btn-danger btn-sm" onclick="deleteAction()">Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function selectOption(option, newValue) {
        document.getElementById('dropdownMenuButton').innerText = option;
        const changeableCells = document.querySelectorAll('.changeable');
        changeableCells.forEach(cell => {
            cell.innerText = newValue;
        });
    }

    function deleteAction() {
    }
</script>