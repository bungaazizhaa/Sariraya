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
                    <p>the only one making meatball in japan<br>
                        with the best material, for the best Indonesian taste.</p>
                </div>
                <div class="slider-img" style="background-image: url('{{ asset('assets/images/bakso1.png') }}');">
                </div>
            </div>
            <div class="carousel-item">
                <div class="txt">
                    <h1 style="color: aliceblue;">Meatball Factory</h1>
                    <p>the only one making meatball in japan<br>
                        with the best material, for the best Indonesian taste.</p>
                </div>
                <div class="slider-img" style="background-image: url('{{ asset('assets/images/bakso1.png') }}');">
                </div>
            </div>
            <div class="carousel-item">
                <div class="txt">
                    <h1 style="color: aliceblue;">Meatball Factory</h1>
                    <p>the only one making meatball in japan<br>
                        with the best material, for the best Indonesian taste.</p>
                </div>
                <div class="slider-img" style="background-image: url('{{ asset('assets/images/bakso1.png') }}');">
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
            Sariraya produces good quality halal meatball a.k.a Bakso using good quality beef and Indonesian traditional
            spices by applying Good Manufacturing Practices. Sariraya`s meatball is one of our best-seller products due
            to it`s delicious taste and unique texture.
        </p>
    </div>

    <div class="container">
        <div class="row pecel mb-lg-2 mb-lg-7 mx-lg-5 mx-sm-2 my-sm-2">
            <div class="col-sm-4 mt-3">
                <div class="card mycard1 text-center">
                    <img class="card-img-top" src="{{ asset('assets/images/baks1.png') }}" alt="Card image cap">

                </div>
            </div>
            <div class="col-sm-4 mt-3">
                <div class="card mycard1 text-center">
                    <img class="card-img-top" src="{{ asset('assets/images/baks2.png') }}" alt="Card image cap">

                </div>
            </div>
        </div>
    </div>

    <div class="tempe">
        <h1>LOCATION</h1>
        <div class="peta">
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.6258874255736!2d137.05771521466258!3d34.89073958052526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600497329682bcc7%3A0xa6cc839ddfff596e!2sNakanohata-54%20Yonezuch%C5%8D%2C%20Nishio%2C%20Aichi%20445-0802%2C%20Japan!5e0!3m2!1sen!2sid!4v1641288058994!5m2!1sen!2sid" width="100%" height="450" style="border:0; max-width: 600px; max-height:450px" allowfullscreen="" loading="lazy"></iframe></p>
        </div>
    </div>
</div>

<!-- Akhir History -->
@endsection