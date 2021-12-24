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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
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
                            <a href="{{ url('/admin/keynote') }}"><button class="btn btn-primary">Back</button></a>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Picture</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <small for="formGroupExampleInput" class="font-weight-bold">Max : 2MB and png or
                                    jpg</small>

                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Judul Berita</label>
                                <input name="name" type="text" class="form-control" id="formGroupExampleInput"
                                    placeholder="">

                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Tanggal</label>
                                <input name="institution" type="text" class="form-control" id="formGroupExampleInput2"
                                    placeholder="">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Isi</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="button-submit">
                                <button class="btn btn-success">Save</button>
                            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="assets/demo/chart-pie-demo.js"></script>
</body>

</html>
