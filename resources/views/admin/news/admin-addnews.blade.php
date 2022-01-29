<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add News - Admin</title>
    <link href="{{ asset('assets/css/style-admin.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>

<body class="sb-nav-fixed">
    @include('layouts.sidebar-admin')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">News</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item">News</li>
                    <li class="breadcrumb-item active">Add News</li>
                </ol>

                <!-- Input News -->
                <div class="container-fluid mt-5">
                    <div class="card mb-4">
                        <div class="card-header">
                            <a href="{{ url('admin-news') }}"><button class="btn btn-primary">Back</button></a>
                        </div>
                        <div class="card-body">
                            <form action="/admin-news/insertnews" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-2">
                                    <label class="mb-1" for="inputGambar">Picture</label>
                                    <div class="custom-file">
                                        <input type="file" name="gambar_news" class="custom-file-input" id="gambar_news"
                                            value="">{{ old('gambar_news') }}
                                    </div>
                                    <small for="formGroupExampleInput" class="font-weight-bold">Max : 2MB and png or
                                        jpg</small>
                                    <div class="text-danger">
                                        @error('gambar_news')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group mb-2">
                                    <input name="id_news" type="text" hidden class="form-control" id="id_news"
                                        placeholder="" value="{{ old('id_news') }}">
                                    <div class="text-danger">
                                        @error('id_news')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="mb-1" for="judulNewsInput">Judul Berita</label>
                                    <input name="judul_news" type="text" class="form-control" id="judul_news"
                                        placeholder="" value="{{ old('judul_news') }}">
                                    <div class="text-danger">
                                        @error('judul_news')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <input name="slug" type="hidden" class="form-control" id="slug" placeholder=""
                                        value="">{{ old('slug') }}
                                </div>
                                <div class="form-group mb-2">
                                    <label class="mb-1" for="tanggalNewsInput">Tanggal</label>
                                    <div class="input-group date">
                                        <input autocomplete="off" name="tanggal_news" type="text"
                                            class="form-control pull-right" id="datepicker1"
                                            value="{{ old('tanggal_news') }}">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                    <div class="text-danger">
                                        @error('tanggal_news')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="mb-1" for="tempatNewsInput">Tempat Berita</label>
                                    <input name="tempat_news" class="form-control" id="tempat_news" rows="3"
                                        value="{{ old('tempat_news') }}"></input>
                                    <div class="text-danger">
                                        @error('tempat_news')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="mb-1" for="isiNewsInput">Isi</label>
                                    <textarea name="isi_news" class="form-control" id="summernote" rows="3"
                                        value="">{{ old('isi_news') }}</textarea>
                                    <div class="text-danger">
                                        @error('isi_news')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="button-submit">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- Akhir Input News -->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        $('.datepicker1').datepicker({
            format: 'mm/dd/yyyy',
            startDate: '-3d'
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'italic', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
</body>

</html>
