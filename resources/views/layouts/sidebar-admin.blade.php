<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand d-none d-md-inline ps-3" href="/">Sariraya.com</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm me-4 me-lg-0 d-flex mr-auto" onclick="openNav()" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    <!-- Navbar-->
    <div class="dropdown d-flex ml-auto">
        <a class="btn btn-secondary dropdown-toggle bg-transparent" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            <a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                    @csrf
                    <button type="submit" class="dropdown-item" href="{{ route('logout') }}">Logout</button>
                </form>
            </a>
        </div>
    </div>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link {{ Request::segment(1) === 'dashboard' ? 'bg-success active' : null }}"
                        href="/dashboard">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Pages</div>
                    <a class="nav-link {{ Request::segment(1) === 'admin-news' ? 'bg-success active' : null }}"
                        href="/admin-news">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        News
                    </a>
                    <a class="nav-link {{ Request::segment(1) === 'admin-contact' ? 'bg-success active' : null }}"
                        href="/admin-contact">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Contacts
                    </a>
                    <a class="nav-link {{ Request::segment(1) === 'admin-profil' ? 'bg-success active' : null }}"
                        href="/admin-profil">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Profil
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Admin
            </div>
        </nav>
    </div>
