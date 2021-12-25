<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>News</title>
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

    <!-- News -->
    <div class="news">
        <div class="banner-news">
            <h3>{{ $news->judul_news }}</h3>
            <p>{{ $news->tanggal_news }} - {{ $news->tempat_news }}</p>
        </div>
        <div class="container">
            <div class="row-news">
                <div class="col-lg-6">
                    <img src="{{ url('gambar_news/' . $news->gambar_news) }}" alt="" class="img-fluid" style="width:550px; border-radius:20px;" />
                </div>
                <div class="col-lg-6">
                    <p style="white-space: pre-line">{{ $news->isi_news }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir News -->

    @include('layouts.footer')