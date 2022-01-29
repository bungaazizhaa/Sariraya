<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>News - Admin</title>
    <link href="{{ asset('assets/css/style-admin.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('assets/images/bunga2.png') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/images') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="{{ asset('assets/images/bunga2.png') }}" type="image/x-icon">
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('assets/css/jsfile.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>

</head>

<body class="sb-nav-fixed">
    @include('layouts.sidebar-admin')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <!-- Isi News -->
                <div class="container-fluid">
                    <h1 class="mt-4">Table News</h1>
                    @if (session('pesan'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil !</strong> {{ session('pesan') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card mb-4">
                        <div class="card-header">
                            <a href="{{ Route('addnews') }}"> <button class="btn btn-primary">Input
                                    News</button></a>

                        </div>
                        <div class="card-body">
                            <div class="box-body table-responsive">
                                <table id="tbl_news" class="display table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Picture</th>
                                            <th>Tgl Berita</th>
                                            <th>Isi</th>
                                            <th>Tgl di Input</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($news as $data)
                                            <tr>
                                                <td>{{ $data->judul_news }}</td>
                                                <td><img src="{{ url('gambar_news/' . $data->gambar_news) }}" alt=""
                                                        width="230px"></td>
                                                <td>{{ $data->tanggal_news }}</td>
                                                <td>{!! Str::limit(strip_tags($data->isi_news), 160) !!}</td>
                                                <td>{{ $data->created_at }}</td>
                                                <td class="text-center">
                                                    <a href="/admin-news/editnews/{{ $data->id_news }}" id=""><i
                                                            style="color:#35C668" class="fas fa-edit"></i></a>
                                                    <button type="button" class="btn bg-transparent" data-toggle="modal"
                                                        data-target="#deleteNews{{ $data->id_news }}"><i
                                                            style="color:#C43030"
                                                            class="fas fa-trash color-danger trash-keynote"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Akhir Isi News -->

            </div>
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
    </div>

    <!-- Modal Delete News-->
    @foreach ($news as $data)
        <div class="modal fade" id="deleteNews{{ $data->id_news }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Berita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Anda ingin menghapus berita "{{ $data->judul_news }}" ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" focused>Batal</button>
                        <a href="/admin-news/deletenews/{{ $data->id_news }}" type="button"
                            class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="assets/demo/chart-pie-demo.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#tbl_news').DataTable();
        });
    </script>
</body>

</html>
