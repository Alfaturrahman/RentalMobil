<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="@yield('description')" />
    <meta name="author" content="@yield('author')" />
    <title>Admin - @yield('title')</title>
    <link href="{{ asset('dashboard/css/styles.css') }}" rel="stylesheet" />
    <!--<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="{{ route('admin.home') }}"><img src="{{ asset('img/rentallogo.png') }}" alt="" style="width: 150px"></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars">-NavBar-</i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            
                    <!--   
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        -->
                    <li><a class="text-light btn btn-dark" href="{{ route('admin.logout.perform') }}">Logout</a></li>
             
        </ul>


    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">MENU</div>
                        <a class="nav-link" href="{{ route('admin.home') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Statistik
                        </a>
                        <div class="sb-sidenav-menu-heading">Data</div>
                        <a class="nav-link" href="{{ route('admin.user.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Pengguna
                        </a>
                        <a class="nav-link" href="{{ route('admin.car.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Mobil
                        </a>
                        <a class="nav-link" href="{{ route('admin.rent.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Penyewaan
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Masuk sebagai:</div>
                    {{ auth('admin')->user()->username }}
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                @yield('main')
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copy Right &copy; Cardex 2024</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('dashboard/js/scripts.js') }}"></script>
</body>

</html>
