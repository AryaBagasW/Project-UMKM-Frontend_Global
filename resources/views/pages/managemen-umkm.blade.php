<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
    @section('breadcrumb', 'umkm')
    @include('layouts.navbars.topnav')

    <div class="container-fluid mt-5 pt-4">
        <div class="row">
            <div class="col-2">
                @include('layouts.navbars.sidenav')
            </div>
            <div class="col-10">
                <h1>Manajemen UMKM</h1>
                <div class="container-fluid mt-5 pt-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manajemen UMKM</li>
                        </ol>
                    </nav>
                    <div class="card full-page-card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Daftar UMKM</h4>
                            <div class="d-flex align-items-center">
                                <div class="dropdown me-2">
                                    <a href="">
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
                                            <th>NPWP</th>
                                            <th>Nama UMKM</th>
                                            <th>Alamat</th>
                                            <th>Status UMKM</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-body">
                                        @if(isset($umkm) && !empty($umkm))
                                            @foreach ($umkm as $index => $result)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $result['npwp'] }}</td>
                                                    <td>{{ $result['nama'] }}</td>
                                                    <td>{{ $result['alamat'] }}</td>
                                                    <td>{{ $result['status_umkm'] ? 'Published' : 'Unpublished' }}</td>
                                                    <td class="px-6 py-3 border-b">
                                                        <a href="{{ route('editUmkm', $result['id']) }}" class="btn btn-primary btn-sm me-2">Ubah</a>  
                                                        <a href="#" class="btn btn-danger btn-sm" onclick="showDeleteModal({{ $result['id'] }})">Hapus</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6">No data available.</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"> <!-- Center the modal -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Konfirmasi Hapus UMKM</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin untuk menghapus UMKM ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-danger" onclick="confirmDelete()">Lanjut</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let itemIdToDelete = null;

        function showDeleteModal(itemId) {
            itemIdToDelete = itemId; // Store the item ID to delete
            var deleteModal = new bootstrap.Modal(document.getElementById('deleteConfirmationModal'));
            deleteModal.show();
        }

        function confirmDelete() {
            alert(`UMKM dengan ID ${itemIdToDelete} akan dihapus.`);
            var deleteModal = bootstrap.Modal.getInstance(document.getElementById('deleteConfirmationModal'));
            deleteModal.hide();
        }
    </script>
</body>

</html>
