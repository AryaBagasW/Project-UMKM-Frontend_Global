<nav class="navbar navbar-expand-lg position-fixed top-0 w-100 z-index-3">
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
                <div>
                    <a href="{{ route('wa') }}">
                        Registrasi
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
