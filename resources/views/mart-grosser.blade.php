<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Halal Mart Grosser</title>
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
                <h1 style="color: aliceblue;">Halal Mart Grosser</h1>
            </div>
            <img src="{{ asset('assets/images/foto1.jpg') }}" alt="" style="width:100%; height:100%;">
        </div>
    </div>

    <!-- Akhir Slider -->

    <!-- History -->
    <div class="container">
        <div class="factory">
            <h1>HALAL MART GROSSER</h1>
            <div class="row-history">
                <div class="col-lg-7">
                    <p>
                        Sariraya Co., Ltd. Sahabat, inilah awal mula nama Sariraya, dari kegiatan sosial budaya,
                        olahraga (UNDOKAI) keagamaan, seminar & shimposium pada tahun 2004 di Prefektur Aichi. Mungkin
                        Sariraya adalah satu-satunya perusahaan Indonesia di Jepang yang didirikan oleh orang Indonesia
                        (Founder Suyoto Rais, Teguh Wahyudi). Sariraya selalu berusaha untuk berkembang dan berkembang,
                        dengan manajemen yang profesional.
                    </p>
                    <p>Februari 2005, Nama Resmi Sahabat berubah menjadi Sariraya Yugengaisha & ditawarkan kepada
                        pecinta pendamping Jepang untuk Indonesia untuk bergabung dalam manajemen Sariraya. Tahun 2006
                        (Pak Takahito Sato) 2010 Sariraya tumbang, pendirinya mundur dari Sariraya karena kondisi yang
                        sangat sulit untuk bertahan hidup. (Beberapa pendiri kembali ke Indonesia, yang lain kembali
                        bekerja).

                    </p>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('assets/images/4.png') }}" alt="">
                </div>
            </div>
            <h1>LOCATION</h1>
            <div class="peta">
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3273.4516419460424!2d137.0237971146622!3d34.87000348164069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600490fc6fbcaf4f%3A0x97f9c82857a1e5d2!2sIchigawara-87%20Tanukich%C5%8D%2C%20Nishio%2C%20Aichi%20444-0301%2C%20Japan!5e0!3m2!1sen!2sid!4v1641288662136!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></iframe></p>
            </div>
        </div>
    </div>
    <!-- Akhir History -->


    @include('layouts.footer')