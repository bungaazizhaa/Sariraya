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
                <li class="nav-item"><a class="{{ Request::segment(1) === 'home' ? 'text-success' : null }}"
                        href="/home">Home</a></li>
                <li class="nav-item"><a class="{{ Request::segment(1) === 'about' ? 'text-success' : null }}"
                        href="/about">About
                        Us</a></li>
                <li class="nav-item"><a class="{{ Request::segment(1) === 'news' ? 'text-success' : null }}"
                        href="/news">News</a></li>
                <li class="nav-item"><a class="{{ Request::segment(1) === 'products' ? 'text-success' : null }}"
                        href="/products">Products</a>
                <li class="nav-item"><a
                        class="{{ Request::segment(1) === 'distributors' ? 'text-success' : null }}" a
                        href="/distributors">Distributors</a></li>
                <li class="nav-item"><a class="{{ Request::segment(1) === 'contact' ? 'text-success' : null }}"
                        href="/contact">Contact</a></li>
            </ul>
        </nav>
        <img src="{{ asset('assets/images/menu.png') }}" class="menu-icon" onclick="menutoggle()">
    </div>
</div>
<!-- Akhir Navbar -->
