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
                    <h1 style="color: aliceblue;">Meatball Factory</h1>
                    <p>the only one making meatball in japan with the best material, <br>
                        for the best Indonesian taste.</p>
                </div>
                <img src="{{ asset('assets/images/bakso1.png') }}">
            </div>
            <div class="carousel-item">
                <div class="txt">
                    <h1 style="color: aliceblue;">Meatball Factory</h1>
                    <p>the only one making meatball in japan with the best material, <br>
                        for the best Indonesian taste.</p>
                </div>
                <img src="{{ asset('assets/images/bakso1.png') }}">
            </div>
            <div class="carousel-item">
                <div class="txt">
                    <h1 style="color: aliceblue;">Meatball Factory</h1>
                    <p>the only one making meatball in japan with the best material, <br>
                        for the best Indonesian taste.</p>
                </div>
                <img src="{{ asset('assets/images/bakso1.png') }}">
            </div>
        </div>

    </div>
</div>
<!-- Akhir Slider -->

<!-- History -->
<div class="container">
    <div class="tempe">
        <p>
            Sariraya produces good quality halal meatball a.k.a Bakso using good quality beef and Indonesian traditional spices by applying Good Manufacturing Practices. Sariraya`s meatball is one of our best-seller products due to it`s delicious taste and unique texture.
        </p>
        <h1>LOCATION</h1>
    </div>


    <div class="peta">
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.6258874255736!2d137.05771521466258!3d34.89073958052526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600497329682bcc7%3A0xa6cc839ddfff596e!2sNakanohata-54%20Yonezuch%C5%8D%2C%20Nishio%2C%20Aichi%20445-0802%2C%20Japan!5e0!3m2!1sen!2sid!4v1641288058994!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
    </div>
</div>

<!-- Akhir History -->
@endsection