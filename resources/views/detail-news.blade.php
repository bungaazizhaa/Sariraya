@extends('layouts.home-template')
@section('content')
    <!-- News -->
    <div class="news">
        <div class="banner-news">
            <h3>{{ $news->judul_news }}</h3>
            <p>{{ $news->tanggal_news }} - {{ $news->tempat_news }}</p>
        </div>
        <div class="container">
            <div class="row-news">
                <div class="col-lg-6">
                    <img src="{{ url('gambar_news/' . $news->gambar_news) }}" alt="" class="img-fluid"
                        style="width:550px; border-radius:20px;" />
                </div>
                <div class="col-lg-6">
                    <p style="white-space: pre-line">{{ $news->isi_news }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir News -->
@endsection
