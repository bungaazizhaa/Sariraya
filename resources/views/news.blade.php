<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/css/jsfile.js')}}"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/images')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="{{ asset('assets/images/logo.png')}}" type="image/x-icon">

</head>

<body>
    <!-- Navbar -->
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="{{ asset('assets/images/logo.png')}}" alt="" width="90px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">News</a></li>
                    <li><a href="">Products</a>
                    <li><a href="">Distributors</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
            <img src="{{ asset('assets/images/menu.png')}}" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
    <!-- Akhir Navbar -->



    <!-- News -->
    <div class="news">
        <div class="banner-news">
            <h3>Program Beasiswa Sariraya Japan 2022</h3>
            <p>01 Januari 2022 - Japan</p>
        </div>
        <div class="container">
            <div class="row-news">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/bea.jpg')}}" alt="" class="img-fluid" style="width:550px;" />
                </div>
                <div class="col-lg-6">
                    <p>Sariraya Co., Ltd merupakan sebuah perusahaan Indonesia yang menjadi pioneer bisnis makanan Halal di Jepang sejak tahun 2005. Saat ini Sariraya Co., Ltd telah memiliki beberapa unit usaha di antaranya: produksi tempe, bakso halal dan sambal pecel, toko retail produk-produk makanan halal, restoran halal, Halal Fried Chicken, dan impor serta distribusi produk halal dari berbagai negara terutama Asia Tenggara khususnya Indonesia ke Jepang. Sebagai bentuk tanggung jawab sosial perusahaan, Sariraya Co., Ltd akan memberikan beasiswa bagi mahasiswa berprestasi yang memenuhi kriteria.</p>
                    <p>Keuntungan Beasiswa: <br>
                        1. Uang saku Rp500,000 per bulan selama 1 semester. <br>
                        2. Business Coaching bersama CEO Sariraya Co., Ltd. <br>
                        3. Mentoring beasiswa luar negeri. <br>
                        4. Pengembangan diri dan karakter.
                    </p>
                    <p>
                        Persyaratan: <br>
                        1. Warga Negara Indonesia <br>
                        2. Mahasiswa S1/D4 minimal semester 6 Perguruan Tinggi di Indonesia yang terakreditasi minimal B dengan program studi (akreditasi minimal B): <br>
                        a. Desain Komunikasi Visual <br>
                        b. Desain Grafis <br>
                        c. Teknik Informatika <br>
                        d. Teknologi Informasi <br>
                        e. Sistem Informasi <br>
                        f. Sistem Komputer <br>
                        g. Ilmu Komputer <br>
                        h. Manajemen Pemasaran <br>
                        3. IPK minimal 3.0 (skala 4.0) <br>
                        4. Memiliki kemampuan pengembangan website dan/atau desain grafis
                    </p>
                    <p>
                        Syarat Administrasi <br>
                        1. Scan Kartu Tanda Mahasiswa <br>
                        2. Scan Transkrip Nilai <br>
                        3. Portofolio pengembangan website dan/atau desain grafis <br>
                        4. Esai 1000 kata: Strategi Pemanfaatan Peluang Pasar Produk Halal di
                    </p>
                    <p>
                        Tahapan Seleksi <br>
                        1. Pendaftaran : 1 Juni – 31 Juli 2021 <br>
                        2. Seleksi Administrasi : 1-10 Agustus 2021 <br>
                        3. Pengumuman Hasil Seleksi Adminstrasi : 11 Agustus 2021 <br>
                        4. Seleksi Wawancara : 15-21 Agustus 2021 <br>
                        5. Pengumuman Hasil Seleksi Wawancara : 27 Agustus 2021 <br>
                        6. Pemberian Beasiswa : September 2021-Maret 2022
                    </p>
                    <p>
                        Pendaftaran: <br>
                        bit.ly/daftarbeaSARIRAYA2021
                    </p>
                    <p>
                        Kontak Person: <br>
                        WhatsApp: +62-858-789-777-02 <br>
                        Email: sariraya2005@gmail.com
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Akhir News -->

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row-footer">
                <div class="col-sm-3">
                    <img src="{{ asset('assets/images/logo.png')}}" alt="" width="200px">
                    <p>Pioneer INDONESIAN halal foods
                        company in Japan</p>
                    <div class="social">
                        <img src="{{ asset('assets/images/gm.png')}}" alt="">
                        <img src="{{ asset('assets/images/ig.png')}}" alt="">
                        <img src="{{ asset('assets/images/fb.png')}}" alt="">
                    </div>
                </div>
                <div class="col-sm-3">
                    <h5>PRODUCTS</h5>
                    <div class="produk-footer">
                        <p><a href="">Tempe Factory</a></p>
                        <p><a href="">Halal Mart</a></p>
                        <p><a href="">Online Shop</a></p>
                        <p><a href="">Halal Fried Chiken</a></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h5>CONTACTS</h5>
                    <div class="kontak-footer">
                        <p>+81-0563-54-0372</p>
                        <p>+81-0563-77-3389</p>
                        <p>satoya@helen.ocn.ne.jp</p>
                        <p>shop@sariraya.com</p>
                    </div>

                </div>
                <div class="col-sm-3">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.250239400547!2d137.058527214581!3d34.900169180018096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004974a89e2e12f%3A0x6799466b794d4d99!2sKitaura-75-1%20Yonezuch%C5%8D%2C%20Nishio%2C%20Aichi%20445-0802%2C%20Jepang!5e0!3m2!1sid!2sid!4v1640087131945!5m2!1sid!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; | Made by Awardee Sariraya 2021</p>
            </div>
        </div>
    </div>
    <!-- Akhir Footer -->

    <!-- Js for menu toggle -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px"
            } else {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>