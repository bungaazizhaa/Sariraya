@extends('layouts.home-template')
@section('content')
    <!-- News -->
    @foreach ($news as $data)

        <div class="news">
            <div class="banner-news">
                <h3 class="text-white">{{ $data->judul_news }}</h3>
                <p class="text-white">{{ date('M-d-Y', strtotime($data->tanggal_news)) }} - {{ $data->tempat_news }}
                </p>
            </div>
            <div class="container">
                <div class="row row-news">
                    <div class="col-lg-6">
                        <img src="{{ url('gambar_news/' . $data->gambar_news) }}" alt="" class="img-fluid"
                            style="width:550px; border-radius:20px;" />
                    </div>
                    <div class="col-lg-6">
                        <p style="white-space: pre-line">{!! $data->isi_news !!}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- Akhir News -->
@endsection
