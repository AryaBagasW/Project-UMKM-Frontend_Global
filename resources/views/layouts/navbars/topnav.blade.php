<nav class="navbar navbar-expand-lg bg-blue position-fixed top-0 w-100 z-index-3">
    <div class="container">
        <div class="col">
            <div class="collapse navbar-collapse" id="topNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link me-2">
                            {{ \Carbon\Carbon::now()->format('M d, Y') }}
                            <i class="fa fa-user opacity-6 ms-2 icon-circle"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-5 pt-4">
    <h1 class="ms-1">Dashboard</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                @yield('breadcrumb')
            </li>
        </ol>
    </nav>
</div>