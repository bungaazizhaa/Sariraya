<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us</title>
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
    <div class="slider" style="width:100%;">
        <div class="myslider" style="display: block; ">
            <div class="txt ml-n3">
                <h1 style="font-size:5.2vw; margin-bottom:1vw; color: aliceblue;">
                    ABOUT US</h1>
                {{-- <p style="font-size:2.2vw; margin-top:0.125vw;">Pioneer INDONESIAN Halal Food Company in JAPAN.</p> --}}
            </div>
            <img src="{{ asset('assets/images/foto1.jpg') }}" style=" width:100%;" alt="">
        </div>
    </div>

    <!-- Akhir Slider -->

    <!-- About -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mt-4 text-center">
                <img src="{{ asset('assets/images/fotoprofil.jpg') }}" width="100%" alt="" class="img-fluid rounded" />
            </div>
            <div class="col-lg-6 tabel-profil">
                <h2>PROFILE</h2>
                <table>
                    <thead>
                        @foreach ($getAllProfil as $profil)
                            <tr class=" d-flex mb-auto">
                                <th style="width: 45%; margin-top:10px;">{{ $profil->judul_profil }}</th>
                                <td style="width: 55%; margin-top:10px;" class="tabel-profil">: {!! $profil->isi_profil !!}
                                </td>
                            </tr>
                        @endforeach
                    </thead>
                </table>
            </div>

        </div>
    </div>
    <!-- Akhir About -->

    <!-- Visi Misi -->
    <div class="
                                row-about">
        <div class="column">
            <div class="card visi">
                <img src="{{ asset('assets/images/5.png') }}" alt="">
                <h3>{{ $getVisi->judul_profil }}</h3>
                <p>{!! $getVisi->isi_profil !!}</p>
            </div>
        </div>

    </div>
    <div class="row-about">
        <div class="column">
            <div class="card misi text-left">
                <img src="{{ asset('assets/images/22.png') }}" alt="">
                <h3 class="text-center">{{ $getMisi->judul_profil }}</h3>
                {!! $getMisi->isi_profil !!}
            </div>
        </div>
    </div>
    <!-- Akhir Visi Misi -->

    <!-- History -->
    <div class="sejarah">
        <div class="container">
            <div class="timeline">
                <h1>HISTORY</h1>
                <ul>
                    <li>
                        <div class="timeline-content">
                            <h3>2022</h1>
                                <p>The opening of Sariraya Center and Indonesian SME Center (インドネシア共和国 中小企業製品).
                                </p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-content">
                            <h3>2021</h3>
                            <p> - Sariraya expanded it`s business by opening of Halal Pizza Station at 31st July
                                2021.
                                Pizza Station is the one and only Halal Pizza in Nishio city located next to
                                Sariraya
                                Halal Mart. <br>
                                - The opening of Halal Kombini Plus+ in Nagoya City, a franchise of Halal food
                                retail
                                shop. <br>
                                - Sariraya Co., Ltd. was awarded Primaduta Award by the Ministry of Trading
                                Republic of
                                Indonesia as best importer of Indonesian products.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-content">
                            <h3>2020</h3>
                            <p>The opening of Sariraya Halal Mart & Online Shop and also Halal Steak & Shake at
                                17th
                                October 2020 which are located at Tanuki cho, Nishio city.</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-content">
                            <h3>2019</h3>
                            <p>- The establishment of PT Sinergi Cita Mulia Indonesia, the exporter company to
                                supply
                                Sariraya products. <br>
                                - The opening of Halal Fried Chicken (HFC) Japan restaurant.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-content">
                            <h3>2013</h3>
                            <p>Sariraya changed the status to 株式会社サリラヤ (Sariraya Co., Ltd.)</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-content">
                            <h3>2010</h3>
                            <p>The launching of Sariraya Halal Online Shop.</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-content">
                            <h3>2007</h3>
                            <p>The Opening of Sariraya Halal Restaurant and Halal Mart in Toyota city.</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-content">
                            <h3>2005</h3>
                            <p>Sariraya started its business as 有限会社サリラヤ with some business units such as tempeh
                                factory, restaurant and halal mart, and also importing some halal foods products
                                from
                                Indonesia.</p>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <!-- Akhir History -->


    @include('layouts.footer')
