@extends('layouts.admin-template')

@section('content')
    <!-- Isi Content -->
    <h1 class="mt-4">News</h1>
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
                            <th>No</th>
                            {{-- <th>ID</th> --}}
                            <th>Picture</th>
                            <th>Judul</th>
                            <th>Tgl Berita</th>
                            <th>Isi</th>
                            <th>Tgl di Input</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($news as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                {{-- <td>{{ $data->id_news }}</td> --}}
                                <td>
                                    <div class="card-img-top"
                                        style="background-image: url('{{ url('gambar_news/' . $data->gambar_news) }}'); max-height:140px;height:140px; width:140px; background-size:cover; background-position:center; background-color: black; display: block;">
                                    </div>
                                </td>
                                <th>{{ $data->judul_news }}</th>
                                <td>{{ date('d F Y', strtotime($data->tanggal_news)) }}</td>
                                <td>{!! Str::limit(strip_tags($data->isi_news), 160) !!}</td>
                                <td>{{ $data->created_at }}</td>
                                <td class="text-center">
                                    <a href="/admin-news/editnews/{{ $data->id_news }}" id=""><i style="color:#35C668"
                                            class="fas fa-edit"></i></a>
                                    <button type="button" class="btn bg-transparent" data-toggle="modal"
                                        data-target="#deleteNews{{ $data->id_news }}"><i style="color:#C43030"
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

    <script>
        $(function() {
            $("#tbl_news").DataTable({
                stateSave: true,
            });
        });
    </script>
@endsection
