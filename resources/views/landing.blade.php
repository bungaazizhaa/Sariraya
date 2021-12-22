<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sariraya</title>
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

  <!-- Slider -->
  <div class="slider">
    <div class="myslider " style="display: block;">
      <div class="txt">
        <h1 style="color: aliceblue;">Sariraya.Co.Ltd.</h1>
        <p>Pioneer INDONESIAN Halal Food Company in JAPAN.</p>
      </div>
      <img src="{{ asset('assets/images/foto1.jpg')}}" alt="" style="width:100%; height:100%;">
    </div>

    <!--
    <div class="myslider fade">
      <div class="txt">
        <h1>Gambar 2</h1>
        <p>deskripsi</p>
      </div>
      <img src="{{ asset('assets/images/2.png')}}" alt="" style="width:100%; height:100%;">
    </div>
    <div class="myslider fade">
      <div class="txt">
        <h1>Gambar 3</h1>
        <p>deskripsi</p>
      </div>
      <img src="{{ asset('assets/images/3.png')}}" alt="" style="width:100%; height:100%;">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
    <div class="dotsbox" style="text-align: center;">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
  </div>-->

  </div>

  <!-- Akhir Slider -->

  <!-- Section Product -->
  <div class="container">
    <div class="produk">
      <h1>Let’s see our products</h1>

      <div class="grid">
        <article>
          <img src="{{ asset('assets/images/a3.png')}}" alt="">
          <div class="text">
            <h3>Tempe Factory</h3>
            <a href=""> know more -> </a>
          </div>
        </article>

        <article>
          <img src="{{ asset('assets/images/a2.png')}}" alt="">
          <div class="text">
            <h3>Online Shop</h3>
            <a href=""> know more -> </a>
          </div>
        </article>

        <article>
          <img src="{{ asset('assets/images/a1.png')}}" alt="">
          <div class="text">
            <h3>Halal Fried Chiken</h3>
            <a href=""> know more -> </a>
          </div>
        </article>
      </div>
    </div>

  </div>

  <!-- Akhir Section Product -->


  <!-- Section Katalog -->
  <div class="row katalog">
    <div class="col-lg teksdonlot">
      <p>DOWNLOAD SARIRAYA <br> CATALOGUE HERE!</p>
      <a href="" class="btn donlot">DOWNLOAD</a>
    </div>
    <div class="col-lg-6">
      <img src="{{ asset('assets/images/katalog.png')}}" alt="" class="img-fluid" />
    </div>
  </div>
  <!-- Akhir Section Katalog -->

  <!-- Section News -->
  <div class="container">
    <div class="news">
      <h1>GOOD NEWS</h1>
      <h4>Here’s the latest news from us to you</h4>
      <div class="grid">
        <article>
          <img src="{{ asset('assets/images/pos1.jpeg')}}" alt="">
          <div class="text">
            <p>Program Beasiswa Sariraya.Co.Ltd. Japan 2022</p>
            <a href="" class="btn lihat">View More</a>
          </div>
        </article>
        <article>
          <img src="{{ asset('assets/images/pos2.jpg')}}" alt="">
          <div class="text">
            <p>Dinners with Sariraya Group, <br> BI representative Tokyo, BNI etc.</p>
            <a href="" class="btn lihat">View More</a>
          </div>
        </article>
        <article>
          <img src="{{ asset('assets/images/pos3.jpg')}}" alt="">
          <div class="text">
            <p>Foodex Japan 46th 9~12 March, <br> 3750 buyer visiting at Sariraya Booth</p>
            <a href="" class="btn lihat">View More</a>
          </div>
        </article>
      </div>
    </div>
  </div>
  <!-- Akhir Section News -->

  <!-- Section Online Shop -->
  <div class="row shop">
    <div class="col-lg-6">
      <img src="{{ asset('assets/images/mas.png')}}" alt="" class="img-fluid" />
    </div>
    <div class="col-lg teksdonlot">
      <h4>SARIRAYA <br> ONLINE SHOP</h4>
      <p>Kunjungi japanhalal.net untuk mengetahui lebih lanjut <br>
        mengenai produk produk makanan halal dari kami. <br>
        Mulai dari dry food, frozen food, daging, susu dan lain lain. <br>
        Serta dapatkan penawaran terbaik dari kami <br> di setiap promonya.</p>
    </div>

  </div>
  <div class="shop1">
    <img src="{{ asset('assets/images/sh.jpg')}}" alt="">
  </div>

  <!-- Akhir Section Online Shop -->

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