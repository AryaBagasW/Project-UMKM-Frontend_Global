@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('breadcrumb', 'produk')
@include('layouts.navbars.topnav')

<div class="container-fluid mt-5 pt-4">
    <div class="row">
        <div class="col-2">
            @include('layouts.navbars.sidenav')
        </div>

        <div class="col-10 mt-5 pt-4">
            <div class="card full-page-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Daftar Umkm</h4>
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
                            <a href="{{'tambah'}}">
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
                                <tr>
                                    <td class="changeable">Test</td>
                                    <td class="changeable">Test</td>
                                    <td class="changeable">Test</td>
                                    <td class="changeable">Test</td>
                                    <td>
                                        <a href="{{'edit-produk'}}">
                                            <button class="btn btn-primary btn-sm me-2" onclick="editAction()">Ubah</button>
                                        </a>
                                        <button class="btn btn-danger btn-sm" onclick="showDeleteModal()">Hapus</button>
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

    }

    function editAction() {
    }

    function deleteAction() {
    }

    let itemIdToDelete = null;

    function showDeleteModal(itemId) {
        itemIdToDelete = itemId; // Store the item ID to delete
        var deleteModal = new bootstrap.Modal(document.getElementById('deleteConfirmationModal'));
        deleteModal.show();
    }

    function confirmDelete() {
        // You can capture the comment if needed
        const comment = document.getElementById('deleteComment').value;
        
        // Perform the delete action
        // For example, you can use an AJAX request to delete the item

        // Hide the modal after confirming
        var deleteModal = bootstrap.Modal.getInstance(document.getElementById('deleteConfirmationModal'));
        deleteModal.hide();
        
        // Add your delete logic here, such as:
        // window.location.href = `/delete/${itemIdToDelete}?comment=${comment}`;
        // Or make an AJAX request to delete the item
    }
</script>
