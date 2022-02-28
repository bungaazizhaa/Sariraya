@extends('layouts.home-template')
@section('content')
    <!-- Slider -->
    <!--
        <div class="slider-about">
            <div class="myslider-about " style="display: block;">
                <div class="txt">
                    <h1 style="color: aliceblue;">Tempe Factory</h1>
                </div>
                <img src="{{ asset('assets/images/foto1.jpg') }}" alt="" style="width:100%; height:100%;">
            </div>
        </div>
        -->
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
                        <h1 style="color: aliceblue;">Tempe Factory</h1>
                        <p>the only one making tempe in japan<br>
                            with the best material, for the best Indonesian taste.</p>
                    </div>
                    <div class="slider-img"
                        style="background-image: url('{{ asset('assets/images/bannertempe1.jpg') }}');">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="txt">
                        <h1 style="color: aliceblue;">Tempe Factory</h1>
                        <p>the only one making tempe in japan<br>
                            with the best material, for the best Indonesian taste.</p>
                    </div>
                    <div class="slider-img"
                        style="background-image: url('{{ asset('assets/images/bannertempe2.jpg') }}');">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="txt">
                        <h1 style="color: aliceblue;">Tempe Factory</h1>
                        <p>the only one making tempe in japan<br>
                            with the best material, for the best Indonesian taste.</p>
                    </div>
                    <div class="slider-img"
                        style="background-image: url('{{ asset('assets/images/bannertempe3.jpg') }}');">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Akhir Slider -->

    <!-- History -->
    <div class="container">
        <div class="tempe">

            <p>
                Tempe is a plant-based protein source that originated in Indonesia.
                It’s made from fermented soybeans that have been formed into a block.
                Though it’s known for its high protein content, it offers a host of different health benefits.

            </p>
            <p>Sariraya Tempe Factory is located in Yonezu-cho, Nishio city, Aichi prefecture.
                It produces good quality tempeh products by applying Good Manufacturing Practices.

            </p>
        </div>


        <div class="container">
            <div class="row mb-lg-2 mb-lg-5 mx-lg-5 mx-sm-2 my-sm-2">
                <div class="col-sm-4 mt-3">
                    <div class="card mycard1 text-center">
                        <img class="card-img-top" src="{{ asset('assets/images/temp1.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">PRODUCT</h5>
                            <p>Sariraya tempe is packed in attractive packaging with orange color, with weight of each
                                product 250g.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-3">
                    <div class="card mycard1 text-center">
                        <img class="card-img-top" src="{{ asset('assets/images/temp2.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">PRODUCTION</h5>
                            <p>Making tempe juice made in a factory with a very sophisticated, hygienic, and made directly
                                by professionals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-3">
                    <div class="card mycard1 text-center">
                        <img class="card-img-top" src="{{ asset('assets/images/temp3.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">DELIVERY</h5>
                            <p>Sariraya tempe has its own vehicle to distribute tempe to your place with its quality awake.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tempe">
            <h1>LOCATION</h1>
            <div class="peta">
                <p><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.625935474164!2d137.0583198740541!3d34.89073837425662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600497329682bcc7%3A0xa6cc839ddfff596e!2sNakanohata-54%20Yonezuch%C5%8D%2C%20Nishio%2C%20Aichi%20445-0802%2C%20Japan!5e0!3m2!1sen!2sid!4v1641287909233!5m2!1sen!2sid"
                        width="100%" height="450" style="border:0; max-width: 600px; max-height:450px" allowfullscreen=""
                        loading="lazy"></iframe></p>
            </div>
        </div>
    </div>
    </div>
    <!-- Akhir History -->
@endsection
