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
                    <h1 style="color: aliceblue;">Halal Mart Tanuki</h1>
                    <p>Halal good selected quality food products <br>
                        with affordable price and good customer service.</p>
                </div>
                <img src="{{ asset('assets/images/bannertanuki1.png') }}">
            </div>
            <div class="carousel-item">
                <div class="txt">
                    <h1 style="color: aliceblue;">Halal Mart Tanuki</h1>
                    <p>Halal good selected quality food products <br>
                        with affordable price and good customer service.</p>
                </div>
                <img src="{{ asset('assets/images/bannertanuki2.png') }}">
            </div>
            <div class="carousel-item">
                <div class="txt">
                    <h1 style="color: aliceblue;">Halal Mart Tanuki</h1>
                    <p>Halal good selected quality food products <br>
                        with affordable price and good customer service.</p>
                </div>
                <img src="{{ asset('assets/images/bannertanuki2.png') }}">
            </div>
        </div>

    </div>
</div>


<!-- Akhir Slider -->

<!-- History -->
<div class="container">
    <div class="tempe">
        <p>
            Sariraya has 2 offline halal food stores located in Yonezu-cho and Tanuki-cho, Nishio city, Aichi prefecture. These stores provide various halal foods which are produced by Sariraya and/or imported from some countries especially Indonesia. There are more than 500 products sold by Sariraya Halal Mart. We sell halal good selected quality food products with affordable price and good customer service.
        </p>

        <h1>LOCATION</h1>
    </div>
    <div class="peta">
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3273.4516419460424!2d137.0237971146622!3d34.87000348164069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600490fc6fbcaf4f%3A0x97f9c82857a1e5d2!2sIchigawara-87%20Tanukich%C5%8D%2C%20Nishio%2C%20Aichi%20444-0301%2C%20Japan!5e0!3m2!1sen!2sid!4v1641288488979!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
    </div>

</div>
<!-- Akhir History -->
@endsection