<nav class="navbar navbar-expand-lg position-fixed top-0 w-100 z-index-3 bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavbar" aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle me-2" href="#" id="authDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ \Carbon\Carbon::now()->format('M d, Y') }}
                        <i class="fa fa-user opacity-6 ms-2 icon-circle"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="authDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ route('login') }}">
                                <i class="fa fa-sign-in-alt me-2"></i> Login
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="">
                                <i class="fa fa-user-plus me-2"></i> Register
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
