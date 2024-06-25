<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manajemen Produk</title>
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

            <div class="col-10 mt-5 pt-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manajemen Produk</li>
                    </ol>
                </nav>
                <div class="card full-page-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Daftar Produk</h4>
                        <div class="d-flex align-items-center">
                            <div class="dropdown me-2">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    Test1
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#" onclick="selectOption('Test1', 'dummy1')">Test1</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="selectOption('Test2', 'dummy2')">Test2</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="selectOption('Test3', 'dummy3')">Test3</a></li>
                                </ul>
                                <a href="{{ 'tambah-produk' }}">
                                    <button class="btn btn-success me-2" onclick="addAction()">Tambah</button>
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
                                        <th>Kode</th>
                                        <th>Nama Barang</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($produk) && !empty($produk))
                                        @foreach ($produk as $index => $result)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $result['kode_produk'] }}</td>
                                                <td>{{ $result['nama_produk'] }}</td>
                                                <td>{{ $result['status_publik'] ? 'Published' : 'Unpublished' }}</td>
                                                <td class="px-6 py-3 border-b">
                                                    <a href="/edit-produk/{{ $result['id'] }}" class="text-blue-500 hover:text-blue-700">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="#" class="text-red-500 hover:text-red-700 ml-4" onclick="showDeleteModal({{ $result['id'] }})">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5">No data available.</td>
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

    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Konfirmasi Hapus Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda Yakin untuk menghapus Produk ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-danger" onclick="confirmDelete()">Lanjut</button>
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

        function addAction() {
            // Add your add action logic here
        }

        function editAction() {
            // Add your edit action logic here
        }

        function deleteAction() {
            // Add your delete action logic here
        }

        let itemIdToDelete = null;

        function showDeleteModal(itemId) {
            itemIdToDelete = itemId; // Store the item ID to delete
            var deleteModal = new bootstrap.Modal(document.getElementById('deleteConfirmationModal'));
            deleteModal.show();
        }

        function confirmDelete() {
            // Perform the delete action
            alert(`Produk dengan ID ${itemIdToDelete} akan dihapus.`);
            var deleteModal = bootstrap.Modal.getInstance(document.getElementById('deleteConfirmationModal'));
            deleteModal.hide();
        }
    </script>
</body>

</html>
