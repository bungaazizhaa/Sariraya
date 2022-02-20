@extends('layouts.home-template')
@section('content')
    <!-- Slider -->

    <div class="slider-tempe">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="txt">
                        <h1>Sariraya.Co.Ltd.</h1>
                        <p>Pioneer INDONESIAN Halal Food Company in JAPAN.</p>
                    </div>
                    <div class="slider-img" style="background-image: url('{{ asset('assets/images/banner1.png') }}');">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="txt">
                        <h1>Sariraya.Co.Ltd.</h1>
                        <p>Pioneer INDONESIAN Halal Food Company in JAPAN.</p>
                    </div>
                    <div class="slider-img"
                        style="background-image: url('{{ asset('assets/images/banner2.png') }}');">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="txt">
                        <h1>Sariraya.Co.Ltd.</h1>
                        <p>Pioneer INDONESIAN Halal Food Company in JAPAN.</p>
                    </div>
                    <div class="slider-img"
                        style="background-image: url('{{ asset('assets/images/banner3.png') }}');">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--
                                                                                                                                <div class="slider" style="width:100%;">
                                                                                                                            <div class="myslider" style="display: block; ">
                                                                                                                                <div class="txt ml-n3">
                                                                                                                                    <h1 style="font-size:5.2vw; margin-bottom:1vw; color: aliceblue;">
                                                                                                                                        Sariraya.Co.Ltd.</h1>
                                                                                                                                    <p style="font-size:2.2vw; margin-top:0.125vw;">Pioneer INDONESIAN Halal Food Company in JAPAN.</p>
                                                                                                                                </div>
                                                                                                                                <img src="{{ asset('assets/images/welcome.png') }}" style=" width:100%;" alt="">
                                                                                                                            </div>
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
        <h2 class="text-center mt-5 mb-0">Our Products</h2>
        <div class="row mb-lg-2 mb-lg-5 mx-lg-5 mx-sm-2 my-sm-2">
            <div class="col-sm-4 mt-3">
                <div class="card mycard text-center">
                    <img class="card-img-top" src="{{ asset('assets/images/a3.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Tempe Factory</h5>
                        <a class="card-text" href="/factory/tempe-factory"> know more -> </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-3">
                <div class="card mycard text-center">
                    <img class="card-img-top" src="{{ asset('assets/images/a2.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Online Shop</h5>
                        <a class="card-text" href="https://japanhalal.net"> know more -> </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-3">
                <div class="card mycard text-center">
                    <img class="card-img-top" src="{{ asset('assets/images/a1.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Halal Fried Chiken</h5>
                        <a class="card-text" href="https://hfcjapan.jp/"> know more -> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Section Product -->


    <!-- Section Katalog -->
    <div class="row katalog">
        <div class="col-lg teksdonlot">
            <p>DOWNLOAD SARIRAYA <br> CATALOGUE HERE!</p>
            <a href="{{ $getLinkCatalog->isi_profil }}" class="btn donlot">DOWNLOAD</a>
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('assets/images/katalog.png') }}" alt="" class="img-fluid" />
        </div>
    </div>
    <!-- Akhir Section Katalog -->

    <div class="container">
        <h2 class="text-center mt-5 mb-0">Good News</h2>
        <div class="row mb-3 mt-lg-4 mx-lg-5 mx-sm-2 my-sm-1">
            @foreach ($home as $data)
                <div class="col-sm-4 mt-3">
                    <div class="card mycard">
                        <div class="card-img-top"
                            style="background-image: url('{{ url('gambar_news/' . $data->gambar_news) }}'); height:380px; background-size:cover; background-position:center; background-color: black; display: block;">
                        </div>
                        {{-- <img class="card-img-top" src="{{ url('gambar_news/' . $data->gambar_news) }}" alt="Card image cap"> --}}
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $data->judul_news }}</h5>
                            {{-- <p class="card-text">{{ Str::limit($data->isi_news, 50) }}</p> --}}
                            <p class="card-text"><small
                                    class="text-muted">{{ date('d F Y', strtotime($data->tanggal_news)) }}</small>
                            </p>
                            <a href="{{ url('news/detail/' . $data->id_news) }}" class="btn lihat">View
                                More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text text-center mt-md-1 mt-2">
            <a href="/news" class="btn lihat">Lihat Semua Berita...</a>
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
        <img class="" src="{{ asset('assets/images/sh.jpg') }}" width="93%" alt="">
    </div>

    <!-- Akhir Section Online Shop -->
@endsection
