@extends('layouts.home-template')
@section('content')
<!-- Slider -->
<div class="slider-about">
    <div class="myslider-about " style="display: block;">
        <div class="txt">
            <h1 style="color: aliceblue;">Tempe Factory</h1>
        </div>
        <img src="{{ asset('assets/images/foto1.jpg') }}" alt="" style="width:100%; height:100%;">
    </div>
</div>

<!-- Akhir Slider -->

<!-- History -->
<div class="container">
    <div class="factory">
        <h1>TEMPE FACTORY</h1>
        <div class="row-history">
            <div class="col-lg-5">
                <img src="{{ asset('assets/images/tempe.png') }}" alt="">
            </div>
            <div class="col-lg-7">
                <p>
                    Tempe is a plant-based protein source that originated in Indonesia.
                    It’s made from fermented soybeans that have been formed into a block.
                    Though it’s known for its high protein content, it offers a host of different health benefits.

                </p>
                <p>Sariraya Tempe Factory is located in Yonezu-cho, Nishio city, Aichi prefecture.
                    It produces good quality tempeh products by applying Good Manufacturing Practices.

                </p>
            </div>

        </div>
        <h1>LOCATION</h1>
        <div class="peta">
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.625935474164!2d137.0583198740541!3d34.89073837425662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600497329682bcc7%3A0xa6cc839ddfff596e!2sNakanohata-54%20Yonezuch%C5%8D%2C%20Nishio%2C%20Aichi%20445-0802%2C%20Japan!5e0!3m2!1sen!2sid!4v1641287909233!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
        </div>
    </div>
</div>
<!-- Akhir History -->
@endsection