<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>News - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('assets/css/style-admin.css') }}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ asset('assets/images/bunga2.png') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
</head>

<body class="sb-nav-fixed">
    @include('layouts.sidebar-admin')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">News</h1>
                {{-- @if (session('pesan')) --}}
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil !</strong> {{ session('pesan') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{-- @endif --}}
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">News</li>
                </ol>
                <!--
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Area Chart Example
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Bar Chart Example
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="50"></canvas></div>
                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-pie me-1"></i>
                                    Pie Chart Example
                                </div>
                                <div class="card-body"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div>
                        </div>
                    </div>
  -->

                <!-- Isi News -->
                <div class="container-fluid">
                    <h1 class="mt-4">Table News</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <a href="{{ Route('addnews') }}"> <button class="btn btn-primary">Input
                                    News</button></a>

                        </div>
                        <div class="card-body">
                            <div class="box-body table-responsive">
                                <table id="tbl_news" class="display table table-bordered table-hover">
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
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
                                                        width="300px"></td>
                                                <td>{{ $data->tanggal_news }}</td>
                                                <td style="white-space: pre-line">{{ $data->isi_news }}</td>
                                                <td>{{ $data->created_at }}</td>
                                                <td class="text-center">
                                                    <a href="/admin-news/editnews/{{ $data->id_news }}" id=""><i
                                                            style="color:#35C668" class="fas fa-edit"></i></a>
                                                    <a><i data-toggle="modal" data-target=".bd-delete-modal-admin10"
                                                            style="color:#C43030" data-id=""
                                                            class="fas fa-trash color-danger trash-keynote"></i></a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
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
