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
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">

</head>

<body>
    @include('layouts.navbar')

    <!-- Slider -->
    <div class="slider-about">
        <div class="myslider-about " style="display: block;">
            <div class="txt">
                <h1 style="color: aliceblue;">ABOUT US</h1>
            </div>
            <img src="{{ asset('assets/images/foto1.jpg') }}" alt="" style="width:100%; height:100%;">
        </div>
    </div>

    <!-- Akhir Slider -->

    <!-- About -->
    <div class="row about">
        <div class="col-lg-6">
            <img src="{{ asset('assets/images/fotoprofil.jpg') }}" alt="" class="img-fluid" />
        </div>
        <div class="col-lg tabel-profil">
            <h2>PROFILE</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <td>: Sariraya Co.,Ltd.</td>
                </tr>
                <tr>
                    <th>President Director </th>
                    <td>: TEGUH WAHYUDI</td>
                </tr>
                <tr>
                    <th>Managing Marketing Support Division </th>
                    <td>: MS. KOMANG IRIANI</td>
                </tr>
                <tr>
                    <th>Managing Import Devision </th>
                    <td>: Mr. Takahito Sato</td>
                </tr>
                <tr>
                    <th>Managing Production & QC </th>
                    <td>: MR. JARNO</td>
                </tr>
                <tr>
                    <th>Staﬀ Creative</th>
                    <td>: Deni Krisdianto</td>
                </tr>
                <tr>
                    <th>Estabilized </th>
                    <td>: 2005</td>
                </tr>
                <tr>
                    <th>Capital</th>
                    <td>: 500万</td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td>: 445-0804. Aichi-Ken,
                        Nishio-Shi, Yonezu-Cho,
                        Kitaura 75-1</td>
                </tr>
            </table>
        </div>

    </div>
    <!-- Akhir About -->

    <!-- Visi Misi -->
    <div class="row-about">
        <div class="column">
            <div class="card visi">
                <img src="{{ asset('assets/images/5.png') }}" alt="">
                <h3>VISI</h3>
                <p>
                    Sebagai produsen dan pionir perusahaan perdagangan makanan halal Indonesia di Jepang.
                    Mendistribusikan dan menyediakan produk makanan halal dari berbagai negara Asia, yang bertujuan
                    untuk memperkenalkan dan mendistribusikan makanan halal berkualitas tinggi dan higienis di
                    Masyarakat Jepang.</p>
            </div>
        </div>
        <div class="column">
            <div class="card misi">
                <img src="{{ asset('assets/images/22.png') }}" alt="">
                <h3>MISI</h3>
                <p>
                    Sebagai perusahaan yang akan menyediakan, memperkenalkan dan mensosialisasikan produk makanan halal
                    kepada masyarakat muslim yang berada di Jepang. Menjadi perusahaan ganda nasional sekaligus sebagai
                    media persahabatan antara Indonesia dan Jepang.</p>
            </div>
        </div>
    </div>
    <!-- Akhir Visi Misi -->

    <!-- History -->
    <div class="container">
        <div class="history">
            <h1>HISTORY</h1>
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
                    <p>Teguh Wahyudi selaku CEO Sariraya pada tahun 2010 memutuskan untuk mengambil alih seluruh kendali
                        perusahaan bersama istrinya (Komang Iriani). Terakhir, mulai tahun 2013 Sariraya merubah Staus
                        dari Yugengaisha menjadi Kabushikigaisha Sariraya (PT.). Sariraya kemudian menambah divisi
                        import and trading guna mendistribusikan produk halal dari Luar Negeri, agar tersebar ke seluruh
                        Jepang. Sariraya Terus maju dan berkembang menjadi perusahaan Dwi Nasional sekaligus media
                        silaturahim antara Indonesia dan Jepang. Seperti Visi & Misi perusahaan kami dan Jepang. Sebagai
                        Visi & Misi perusahaan kami.

                    </p>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('assets/images/4.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir History -->


    @include('layouts.footer')
