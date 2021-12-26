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
    <script src="{{ asset('assets/css/jsfile.js') }}"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/images') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="{{ asset('assets/images/bunga2.png') }}" type="image/x-icon">

</head>

<body>
    @include('layouts.navbar')

    <!-- Slider -->
    <div class="slider">
        <div class="myslider " style="display: block;">
            <div class="txt">
                <h1 style="color: aliceblue;">Sariraya.Co.Ltd.</h1>
                <p>Pioneer INDONESIAN Halal Food Company in JAPAN.</p>
            </div>
            <img src="{{ asset('assets/images/foto1.jpg') }}" alt="" style="width:100%; height:100%;">
        </div>

        <!--
    <div class="myslider fade">
      <div class="txt">
        <h1>Gambar 2</h1>
        <p>deskripsi</p>
      </div>
      <img src="{{ asset('assets/images/2.png') }}" alt="" style="width:100%; height:100%;">
    </div>
    <div class="myslider fade">
      <div class="txt">
        <h1>Gambar 3</h1>
        <p>deskripsi</p>
      </div>
      <img src="{{ asset('assets/images/3.png') }}" alt="" style="width:100%; height:100%;">
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
                    <img style="width:100%;" src="{{ asset('assets/images/a3.png') }}" alt="">
                    <div class="text">
                        <h3>Tempe Factory</h3>
                        <a href=""> know more -> </a>
                    </div>
                </article>

                <article>
                    <img style="width:100%;" src="{{ asset('assets/images/a2.png') }}" alt="">
                    <div class="text">
                        <h3>Online Shop</h3>
                        <a href=""> know more -> </a>
                    </div>
                </article>

                <article>
                    <img style="width:100%;" src="{{ asset('assets/images/a1.png') }}" alt="">
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
            <a href="https://drive.google.com/file/d/1RFcPb3Jz-w5jTfxX5NYBNKrTwg3ZfhA6/view" class="btn donlot">DOWNLOAD</a>
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('assets/images/katalog.png') }}" alt="" class="img-fluid" />
        </div>
    </div>
    <!-- Akhir Section Katalog -->

    <!-- Section News -->
    <div class="container">
        <div class="news">
            <h1>GOOD NEWS</h1>
            <h4>Here’s the latest news from us to you</h4>
            <div class="grid">
                @foreach ($home as $data)
                <article>
                    <img style="width:100%;" src="{{ url('gambar_news/' . $data->gambar_news) }}" alt="">
                    <div class="text">
                        <p style="height:50px;">{{ $data->judul_news }}<br></p>
                        <a href="{{ url('news/detail/' . $data->id_news) }}" class="btn lihat">View More</a>
                    </div>
                </article>
                @endforeach
                <article>
                    <div class="text">
                        <a href="/news" class="btn">Lihat Selengkapnya...</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <!-- Akhir Section News -->

    <!-- Section Online Shop  -->
    <div class="row shop">
        <div class="col-lg-5">
            <img src="{{ asset('assets/images/mas.png') }}" alt="" class="img-fluid" />
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
        <img src="{{ asset('assets/images/sh.jpg') }}" alt="">
    </div>

    <!-- Akhir Section Online Shop -->

    @include('layouts.footer')