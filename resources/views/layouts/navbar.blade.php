{{-- Navbar saat Admin Login --}}
@if (auth()->user() == true)
    <nav class="sb-topnav navbar fixed-top navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <small class="text-left text-light pl-1 list-unstyled my-0 py-0" href="/">Admin is Logged In</small>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-2"><a class=" btn btn-light" href="/dashboard">Dashboard</a></li>
            <li class="nav-item mr-1">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn bg-danger text-light" href="{{ route('logout') }}">Logout</button>
                </form>
            </li>
        </ul>
    </nav>
    <div style="height: 58px"></div>
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
        <ul class="navbar-nav ml-auto my-2 my-md-0">
            <li class="nav-item mr-0 mr-md-4"><a
                    class="nav-link pr-3 pr-md-2 {{ Request::segment(1) === 'home' || Request::segment(1) == null ? 'text-success' : null }}"
                    href="/home">Home</a></li>
            <li class="nav-item mr-0 mr-md-4 pr-md-0"><a
                    class="nav-link pr-3 pr-md-2 {{ Request::segment(1) === 'about' ? 'text-success' : null }}"
                    href="/about">About
                    Us</a></li>
            <li class="nav-item mr-0 mr-md-4 pr-md-0"><a
                    class="nav-link pr-3 pr-md-2 {{ Request::segment(1) === 'news' ? 'text-success' : null }}"
                    href="/news">News</a></li>
            <li class="nav-item dropdown mr-0 mr-md-4 pr-md-0"><a class="nav-link dropdown-toggle pr-3 pr-md-2" href="#"
                    id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Our Resto</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item pr-3 pr-md-2" href="https://hfcjapan.jp/">Halal Fried Chiken</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item pr-3 pr-md-2" href="#">Pizza Stasion</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item pr-3 pr-md-2" href="#">Halal Steak & Shake</a>
                </div>
            </li>
            <li class="nav-item dropdown mr-0 mr-md-4 pr-md-0"><a
                    class="nav-link dropdown-toggle  pr-3 pr-md-2 {{ Request::segment(1) === 'factory' ? 'text-success' : null }}"
                    href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Our
                    Factory</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item pr-3 pr-md-2 {{ url()->current() === route('tempe.factory') ? 'text-success' : null }}"
                        href="{{ route('tempe.factory') }}">Tempe Factory</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item pr-3 pr-md-2 {{ url()->current() === route('bakso.factory') ? 'text-success' : null }}"
                        href="{{ route('bakso.factory') }}">Meatball Factory</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item pr-3 pr-md-2 {{ url()->current() === route('pecel.factory') ? 'text-success' : null }}"
                        href="{{ route('pecel.factory') }}">Pecel Factory</a>
                </div>
            </li>
            <li class="nav-item dropdown mr-0 mr-md-4 pr-md-0"><a
                    class="nav-link pr-3 pr-md-2 dropdown-toggle {{ Request::segment(1) === 'halal-mart' ? 'text-success' : null }}"
                    href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Halal Mart
                    Store</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item pr-3 pr-md-2 {{ url()->current() === route('mart-yonezu') ? 'text-success' : null }}"
                        href="{{ route('mart-yonezu') }}">Halal Mart Yonezu</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item pr-3 pr-md-2 {{ url()->current() === route('mart-tanuki') ? 'text-success' : null }}"
                        href="{{ route('mart-tanuki') }}">Halal Mart Tanuki</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item pr-3 pr-md-2 {{ url()->current() === route('mart-grosser') ? 'text-success' : null }}"
                        href="{{ route('mart-grosser') }}">Halal Mart Grosser</a>
                </div>
            </li>
            <li class="nav-item mr-0 mr-md-4 pr-md-0"><a
                    class="nav-link pr-3 pr-md-2 {{ Request::segment(1) === 'contact' ? 'text-success' : null }}"
                    href="/contact">Contact</a></li>
            <li class="nav-item mr-0 mr-md-4 pr-md-0"><a class="nav-link  pr-3 pr-md-2"
                    href="https://japanhalal.net">Online
                    Shop</a>
            </li>
        </ul>
    </div>
</nav>
<!-- Akhir Navbar -->
