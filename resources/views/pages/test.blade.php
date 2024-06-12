@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('breadcrumb', 'home')
@include('layouts.navbars.topnav')
<div class="container-fluid mt-5 pt-4 dashboard-container">
  <div class="row">
    <div class="col-md-2">
      @include('layouts.navbars.sidenav')
    </div>
    <div class="col-md-10">
      <div class="row">
        <div class="col-md-3">
          <div class="card card-stats">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="numbers">
                    <h5 class>Total UMKM</h5>
                    <h1 class="card-title">20</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-stats">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="numbers">
                    <h5 class="card-category">Total Produk UMKM</h5>
                    <h1 class="card-title">100</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-stats">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="numbers">
                    <h5 class="card-category">Total Publish</h5>
                    <h1 class="card-title">50</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-stats">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="numbers">
                    <h5 class="card-category">Total Unpublish</h5>
                    <h1 class="card-title">50</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card full-page-card mt-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title mb-0">Statistik UMKM</h4>
            <div class="d-flex align-items-center">
              <input type="text" class="form-control" placeholder="Search....." id="nameFilter">
            </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter" id="exampleTable">
              <thead class="text-primary">
                <tr>
                  <th class="changeable text-center">No</th>
                  <th class="changeable text-center">Nama UMKM</th>
                  <th class="changeable text-center">Produk Semua</th>
                  <th class="changeable text-center">Publish</th>
                  <th class="changeable text-center">Unpublish</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="changeable text-center">1</td>
                  <td class="changeable text-center">Agus UMKM</td>
                  <td class="changeable text-center"><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#detailModal" data-id="1">Detail</button></td>
                  <td class="changeable text-center">10</td>
                  <td class="changeable text-center">10</td>
                </tr>
                <tr>
                  <td class="changeable text-center">2</td>
                  <td class="changeable text-center">Itu UMKM</td>
                  <td class="changeable text-center"><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#detailModal" data-id="2">Detail</button></td>
                  <td class="changeable text-center">14</td>
                  <td class="changeable text-center">2</td>
                </tr>
                <tr>
                  <td class="changeable text-center">3</td>
                  <td class="changeable text-center">Ini UMKM</td>
                  <td class="changeable text-center"><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#detailModal" data-id="3">Detail</button></td>
                  <td class="changeable text-center">5</td>
                  <td class="changeable text-center">10</td>
                </tr>
                <tr>
                  <td class="changeable text-center">4</td>
                  <td class="changeable text-center">Rumah UMKM</td>
                  <td class="changeable text-center"><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#detailModal" data-id="4">Detail</button></td>
                  <td class="changeable text-center">20</td>
                  <td class="changeable text-center">11</td>
                </tr>
                <tr>
                  <td class="changeable text-center">5</td>
                  <td class="changeable text-center">Dia UMKM</td>
                  <td class="changeable text-center"><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#detailModal" data-id="5">Detail</button></td>
                  <td class="changeable text-center">7</td>
                  <td class="changeable text-center">8</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Detail -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Detail UMKM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Konten detail UMKM -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<style>
  .container-fluid {
    width: 100%;
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
  }

  .col-md-2 {
    width: 20%;
  }

  .col-md-10 {
    width: 80%;
  }

  @media (max-width: 768px) {
    .col-md-2 {
      width: 100%;
    }

    .col-md-10 {
      width: 100%;
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var toggleButton = document.getElementById('toggle-sidebar');
    var sidebar = document.getElementById('sidenav-main');

    toggleButton.addEventListener('click', function() {
      sidebar.classList.toggle('d-none');
    });
  });

  function showDetailModal() {
    $('#detailModal').modal('show');
  }
  
  function showDeleteModal() {
    $('#deleteConfirmationModal').modal('show');
  }

  function confirmDelete() {
    // Tambahkan logic untuk menghapus produk
    $('#deleteConfirmationModal').modal('hide');
  }
  
  function editAction() {
    // Tambahkan logic untuk mengedit produk
  }

  function addAction() {
    // Tambahkan logic untuk menambahkan produk
  }

  function selectOption(option, dummy) {
    // Tambahkan logic untuk memilih option
  }
</script>

<i id="toggle-sidebar" class="fas fa-bars menu-icon" onclick="toggleSidebar()"></i>

<script>
  function toggleSidebar() {
    document.getElementById('sidenav-main').classList.toggle('d-none');
  }
</script>
