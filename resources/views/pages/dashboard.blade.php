@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('breadcrumb', 'home')
@include('layouts.navbars.topnav')

<div class="container-fluid mt-5 pt-4 dashboard-container">
  <div class="row">
    <div class="col-md-2">
      @include('layouts.navbars.sidenav')
    </div>
    <div class="col-md-10">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
      </nav>
      
      <div class="row">
        @foreach([
          ['title' => 'Total UMKM', 'value' => 20],
          ['title' => 'Total Produk UMKM', 'value' => 100],
          ['title' => 'Total Publish', 'value' => 50],
          ['title' => 'Total Unpublish', 'value' => 50]
        ] as $stat)
        <div class="col-md-3">
          <div class="card card-stats bg-primary">
            <div class="card-body">
              <div class="numbers text-white">
                <h5 class="text-white">{{ $stat['title'] }}</h5>
                <h1 class="card-title text-white">{{ $stat['value'] }}</h1>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      
      <div class="card full-page-card mt-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title mb-0">Statistik UMKM</h4>
          <div class="search-bar">
            <input type="text" class="form-control" placeholder="Search....." id="nameFilter">
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter" id="exampleTable">
              <thead class="text-primary">
                <tr>
                  @foreach(['No', 'Nama UMKM', 'Produk Semua', 'Publish', 'Unpublish'] as $header)
                  <th class="changeable text-center">{{ $header }}</th>
                  @endforeach
                </tr>
              </thead>
              <tbody>
                @foreach([
                  ['id' => 1, 'name' => 'Agus UMKM', 'all' => 10, 'publish' => 10, 'unpublish' => 10],
                  ['id' => 2, 'name' => 'Itu UMKM', 'all' => 14, 'publish' => 2, 'unpublish' => 12],
                  ['id' => 3, 'name' => 'Ini UMKM', 'all' => 5, 'publish' => 10, 'unpublish' => 5],
                  ['id' => 4, 'name' => 'Rumah UMKM', 'all' => 20, 'publish' => 11, 'unpublish' => 9],
                  ['id' => 5, 'name' => 'Dia UMKM', 'all' => 7, 'publish' => 8, 'unpublish' => 6]
                ] as $umkm)
                <tr>
                  <td class="text-center">{{ $umkm['id'] }}</td>
                  <td class="text-center">{{ $umkm['name'] }}</td>
                  <td class="text-center">
                    <a href="{{ route('detail', ['id' => $umkm['id']]) }}" class="btn btn-sm btn-primary">Detail</a>
                  </td>
                  <td class="text-center">{{ $umkm['publish'] }}</td>
                  <td class="text-center">{{ $umkm['unpublish'] }}</td>
                </tr>
                @endforeach
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

<!-- Scripts -->
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
    $('#deleteConfirmationModal').modal('hide');
  }

  function editAction() {
  }

  function addAction() {
  }

  function selectOption(option, dummy) {
  }
</script>

<i id="toggle-sidebar" class="fas fa-bars menu-icon" onclick="toggleSidebar()"></i>

<script>
  function toggleSidebar() {
    document.getElementById('sidenav-main').classList.toggle('d-none');
  }
</script>
