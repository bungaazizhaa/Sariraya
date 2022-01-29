{{-- Navbar saat Admin Login --}}
@if (auth()->user() == true)
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <li class="text-left text-light ps-3 list-unstyled" href="/">Admin is Logged In</li>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class=" btn bg-light text-dark ps-3" href="/dashboard">Dashboard</a></li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn bg-danger text-light" href="{{ route('logout') }}">Logout</button>
                </form>
            </li>
        </ul>
    </nav>
@endif

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-fixed navbar-light bg-light">
    <a class="logo" href="#">
        <img src="{{ asset('assets/images/logo.png') }}" alt="" width="80px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a
                    class="nav-link {{ Request::segment(1) === 'home' ? 'text-success' : null }}"
                    href="/home">Home</a></li>
            <li class="nav-item"><a
                    class="nav-link {{ Request::segment(1) === 'about' ? 'text-success' : null }}" href="/about">About
                    Us</a></li>
            <li class="nav-item"><a
                    class="nav-link {{ Request::segment(1) === 'news' ? 'text-success' : null }}"
                    href="/news">News</a></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-expanded="false">Our Resto</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="https://hfcjapan.jp/">Halal Fried Chiken</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Pizza Stasion</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Halal Steak & Shake</a>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-expanded="false">Our Factory</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/tempe-factory">Tempe Factory</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/bakso-factory">Bakso Factory</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/pecel-factory">Pecel Factory</a>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-expanded="false">Halal Mart Store</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/halal-mart-yonezu">Halal Mart Yonezu</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/halal-mart-tanuki">Halal Mart Tanuki</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/halal-mart-grosser">Halal Mart Grosser</a>
                </div>
            </li>
            <li class="nav-item"><a
                    class="nav-link {{ Request::segment(1) === 'contact' ? 'text-success' : null }}"
                    href="/contact">Contact</a></li>
            <li class="nav-item"><a class="nav-link " a href="https://japanhalal.net">Online Shop</a>
            </li>
        </ul>
    </div>
</nav>
<!-- Akhir Navbar -->
