@extends('layouts.home-template')
@section('content')
    <!-- News -->
    <div class="news">
        <div class="banner-news">
            <h3 class="text-black font-weight-bold mx-3">{{ $news->judul_news }}</h3>
            <p class="text-black">{{ date('d F Y', strtotime($news->tanggal_news)) }} - {{ $news->tempat_news }}
            </p>
        </div>
        <div class="container">
            <div class="row row-news mx-1">
                <div class="col-lg-6">
                    <img src="{{ url('gambar_news/' . $news->gambar_news) }}" alt=""
                        class="img-fluid mb-2 d-flex ml-md-auto " style="width:550px; border-radius:20px;" />
                </div>
                <div class="col-lg-6">
                    <div class="mr-xl-5 isiberita" style="text-align: justify">{!! $news->isi_news !!}</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir News -->

    <script>
        $(document).ready(function() {
            $(".isiberita a").addClass("text-dark bg-link rounded");
        });
    </script>
@endsection
