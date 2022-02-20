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
                        <h1 style="color: aliceblue;">Halal Mart Yonezu</h1>
                        <p>Halal good selected quality food products <br>
                            with affordable price and good customer service.</p>
                    </div>
                    <div class="slider-img"
                        style="background-image: url('{{ asset('assets/images/banneryonezu1.png') }}');">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="txt">
                        <h1 style="color: aliceblue;">Halal Mart Yonezu</h1>
                        <p>Halal good selected quality food products <br>
                            with affordable price and good customer service.</p>
                    </div>
                    <div class="slider-img"
                        style="background-image: url('{{ asset('assets/images/banneryonezu2.png') }}');">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="txt">
                        <h1 style="color: aliceblue;">Halal Mart Yonezu</h1>
                        <p>Halal good selected quality food products <br>
                            with affordable price and good customer service.</p>
                    </div>
                    <div class="slider-img"
                        style="background-image: url('{{ asset('assets/images/banneryonezu3.png') }}');">
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
                Sariraya has 2 offline halal food stores located in Yonezu-cho and Tanuki-cho, Nishio city, Aichi
                prefecture. These stores provide various halal foods which are produced by Sariraya and/or imported from
                some countries especially Indonesia. There are more than 500 products sold by Sariraya Halal Mart. We sell
                halal good selected quality food products with affordable price and good customer service.
            </p>
        </div>

        <div class="container">
            <div class="row mb-lg-2 mb-lg-5 mx-lg-5 mx-sm-2 my-sm-2">
                <div class="col-sm-4 mt-3">
                    <div class="card mycard1 text-center">
                        <img class="card-img-top" src="{{ asset('assets/images/yonezu1.jpeg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-sm-4 mt-3">
                    <div class="card mycard1 text-center">
                        <img class="card-img-top" src="{{ asset('assets/images/yonezu2.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-sm-4 mt-3">
                    <div class="card mycard1 text-center">
                        <img class="card-img-top" src="{{ asset('assets/images/yonezu3.jpg') }}" alt="Card image cap">

                    </div>
                </div>
            </div>
        </div>

        <div class="tempe">
            <h1>LOCATION</h1>
            <div class="peta">
                <p><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.250239400559!2d137.05852721466297!3d34.900169180017805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004974a89e2e12f%3A0x6799466b794d4d99!2sKitaura-75-1%20Yonezuch%C5%8D%2C%20Nishio%2C%20Aichi%20445-0802%2C%20Japan!5e0!3m2!1sen!2sid!4v1641288357951!5m2!1sen!2sid"
                        width="100%" height="450" style="border:0; max-width: 600px; max-height:450px" allowfullscreen=""
                        loading="lazy"></iframe></p>
            </div>
        </div>
    </div>
    <!-- Akhir History -->
@endsection
