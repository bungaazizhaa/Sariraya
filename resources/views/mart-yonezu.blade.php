@extends('layouts.home-template')
@section('content')
    <!-- Slider -->
    <div class="slider-about">
        <div class="myslider-about " style="display: block;">
            <div class="txt">
                <h1 style="color: aliceblue;">Halal Mart Yonezu</h1>
            </div>
            <img src="{{ asset('assets/images/foto1.jpg') }}" alt="" style="width:100%; height:100%;">
        </div>
    </div>

    <!-- Akhir Slider -->

    <!-- History -->
    <div class="container">
        <div class="factory">
            <h1>HALAL MART YONEZU</h1>
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
                <p><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.250239400559!2d137.05852721466297!3d34.900169180017805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004974a89e2e12f%3A0x6799466b794d4d99!2sKitaura-75-1%20Yonezuch%C5%8D%2C%20Nishio%2C%20Aichi%20445-0802%2C%20Japan!5e0!3m2!1sen!2sid!4v1641288357951!5m2!1sen!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
            </div>
        </div>
    </div>
    <!-- Akhir History -->
@endsection
