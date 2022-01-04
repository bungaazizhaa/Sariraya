{{-- Navbar saat Admin Login --}}
@if (auth()->user() == true)
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="/">Admin is Logged In</a>
    <button><a class="bg-light ps-3" href="/dashboard">Dashboard Admin</a></button>
    <!-- Navbar Search-->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
        @csrf
        <button type="submit" class="bg-light" href="{{ route('logout') }}">Logout</button>
    </form>
</nav>
@endif

<!-- Navbar -->
<div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" width="90px">
        </div>
        <nav>
            <ul id="MenuItems">
                <li class="nav-item"><a class="{{ Request::segment(1) === 'home' ? 'text-success' : null }}" href="/home">Home</a></li>
                <li class="nav-item"><a class="{{ Request::segment(1) === 'about' ? 'text-success' : null }}" href="/about">About
                        Us</a></li>
                <li class="nav-item"><a class="{{ Request::segment(1) === 'news' ? 'text-success' : null }}" href="/news">News</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Our Resto</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://hfcjapan.jp/">Halal Fried Chiken</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Pizza Stasion</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Halal Steak & Shake</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Our Factory</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/tempe-factory">Tempe Factory</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/bakso-factory">Bakso Factory</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/pecel-factory">Pecel Factory</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Halal Mart Store</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/halal-mart-yonezu">Halal Mart Yonezu</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/halal-mart-tanuki">Halal Mart Tanuki</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/halal-mart-grosser">Halal Mart Grosser</a>
                    </div>
                </li>
                <li class="nav-item"><a class="{{ Request::segment(1) === 'contact' ? 'text-success' : null }}" href="/contact">Contact</a></li>
                <li class="nav-item"><a class="" a href="https://japanhalal.net">Online Shop</a>
                </li>
            </ul>
        </nav>
        <img src="{{ asset('assets/images/menu.png') }}" class="menu-icon" onclick="menutoggle()">
    </div>
</div>
<!-- Akhir Navbar -->