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
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
          </nav>
      <div class="card full-page-card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title mb-0">DETAIL PRODUK SEMUA: Agus UMKM</h4>
        </div>
        <div class="input-group mb-3 search-bar">
          <span class="input-group-text"><i class="fas fa-search"></i></span>
          <input type="text" class="form-control form-control-sm" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon1" id="searchInput">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary btn-sm filter-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-filter"></i> Filter
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#" data-filter="all">All</a></li>
              <li><a class="dropdown-item" href="#" data-filter="aktif">Aktif</a></li>
              <li><a class="dropdown-item" href="#" data-filter="tidakaktif">Tidak Aktif</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body p-3">
          <div class="table-responsive">
            <table class="table tablesorter" id="exampleTable">
              <thead class="text-primary">
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Kode Produk</th>
                  <th class="text-center">Nama Produk</th>
                  <th class="text-center">Deskripsi Produk</th>
                  <th class="text-center">Rupiah</th>
                  <th class="text-center">Status Publik</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td class="text-center">10001</td>
                  <td class="text-center">So good</td>
                  <td class="text-center">Daging</td>
                  <td class="text-center">19.000,00</td>
                  <td class="text-center" data-status="aktif">Aktif</td>
                  <td class="text-center">
                    <a href="{{ url('edit/1') }}" class="btn btn-sm">
                      <i class="fas fa-pencil-alt larger-icon"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">2</td>
                  <td class="text-center">10301</td>
                  <td class="text-center">kanzler</td>
                  <td class="text-center">Sosis</td>
                  <td class="text-center">10.000,00</td>
                  <td class="text-center" data-status="aktif">Aktif</td>
                  <td class="text-center">
                    <a href="{{ url('edit/2') }}" class="btn btn-sm">
                      <i class="fas fa-pencil-alt larger-icon"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">3</td>
                  <td class="text-center">10401</td>
                  <td class="text-center">Kapal Api</td>
                  <td class="text-center">Kopi</td>
                  <td class="text-center">2.000,00</td>
                  <td class="text-center" data-status="tidakaktif">Tidak Aktif</td>
                  <td class="text-center">
                    <a href="{{ url('edit/3') }}" class="btn btn-sm">
                      <i class="fas fa-pencil-alt larger-icon"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">4</td>
                  <td class="text-center">12001</td>
                  <td class="text-center">Oreo</td>
                  <td class="text-center">Biskuit</td>
                  <td class="text-center">1.000,00</td>
                  <td class="text-center" data-status="aktif">Aktif</td>
                  <td class="text-center">
                    <a href="{{ url('edit/4') }}" class="btn btn-sm">
                      <i class="fas fa-pencil-alt larger-icon"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">5</td>
                  <td class="text-center">10101</td>
                  <td class="text-center">Milo</td>
                  <td class="text-center">Susu</td>
                  <td class="text-center">1.000,00</td>
                  <td class="text-center" data-status="tidakaktif">Tidak Aktif</td>
                  <td class="text-center">
                    <a href="{{ url('edit/5') }}" class="btn btn-sm">
                      <i class="fas fa-pencil-alt larger-icon"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">6</td>
                  <td class="text-center">10501</td>
                  <td class="text-center">Hillo</td>
                  <td class="text-center">Susu</td>
                  <td class="text-center">3.000,00</td>
                  <td class="text-center" data-status="tidakaktif">Tidak Aktif</td>
                  <td class="text-center">
                    <a href="{{ url('edit/6') }}" class="btn btn-sm">
                      <i class="fas fa-pencil-alt larger-icon"></i>
                    </a>
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
  document.addEventListener('DOMContentLoaded', function() {
    // Apply initial colors based on status
    applyStatusColors();

    // Event listener for dropdown filter
    document.querySelectorAll('.dropdown-item').forEach(item => {
      item.addEventListener('click', event => {
        const filter = event.target.getAttribute('data-filter');
        filterTable(filter);
      });
    });

    // Event listener for search input
    document.querySelector('#searchInput').addEventListener('input', event => {
      const query = event.target.value.toLowerCase();
      searchTable(query);
    });
  });

  function applyStatusColors() {
    const statusCells = document.querySelectorAll('#exampleTable tbody tr td[data-status]');
    statusCells.forEach(cell => {
      const status = cell.getAttribute('data-status');
      if (status === 'aktif') {
        cell.classList.add('status-aktif');
      } else if (status === 'tidakaktif') {
        cell.classList.add('status-tidakaktif');
      }
    });
  }

  function filterTable(filter) {
    const rows = document.querySelectorAll('#exampleTable tbody tr');
    rows.forEach(row => {
      const status = row.querySelector('td[data-status]').getAttribute('data-status');
      if (filter === 'all' || filter === status) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });
  }

  function searchTable(query) {
    const rows = document.querySelectorAll('#exampleTable tbody tr');
    rows.forEach(row => {
      const text = row.textContent.toLowerCase();
      if (text.includes(query)) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });
  }
</script>
