<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>News - Admin</title>
    {{-- Style Admin CSS --}}
    <link href="{{ asset('assets/css/style-admin.css') }}" rel="stylesheet" />
    {{-- Bootstrap 4.5.3 CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    {{-- Icon Title Halaman --}}
    <link rel="icon" href="{{ asset('assets/images/bunga2.png') }}" type="image/x-icon">
    {{-- Datatables --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    {{-- Font Poppins --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    {{-- ???????? --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/images') }}">
    {{-- Splide Slider / Carousel --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    {{-- Font Awesome CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    {{-- JQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- ?????? --}}
    <script src="{{ asset('assets/css/jsfile.js') }}"></script>
    {{-- Font Awesome JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

</head>

<body class="sb-nav-fixed">
    @include('layouts.sidebar-admin')
    <div id="layoutSidenav_content">
        <main>
            <!-- Isi News -->
            <div class="container">
                @yield('content')
            </div>
            <!-- Akhir Isi News -->
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Awardee Sariraya 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    {{-- ?????? --}}
    <script src="js/scripts.js"></script>
    {{-- DataTables JS --}}
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

    {{-- Page Script --}}
    {{-- ================================================================= --}}
    <script>
        $(document).ready(function() {
            $('#tbl_news').DataTable();
        });
    </script>
</body>

</html>
