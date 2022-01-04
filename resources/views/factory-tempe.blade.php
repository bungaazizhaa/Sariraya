<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tempe Factory</title>
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
                        The only one making tempe in japan with the best material, for the best Indonesian taste.
                        Sariraya tempe is packed in attractive packaging with orange color, sariraya identity color, with weight of each product 250g. kept in a frozen state to keep the product fresh and durable.
                    </p>
                    <p>Making tempe juice made in a factory with a very sophisticated and hygienic concept, and made directly by professionals. to make rasalezat in every grain of tempe.

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


    @include('layouts.footer')