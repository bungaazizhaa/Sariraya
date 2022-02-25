@extends('layouts.admin-template')

@section('content')
    <!-- Isi Content -->
    <h1 class="mt-4">Profil</h1>
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
            <a href="{{ Route('addprofil') }}"> <button class="btn btn-primary">Input
                    Profil</button></a>

        </div>
        <div class="card-body">
            <div class="box-body table-responsive">
                <table id="tbl_profil" class="display table table-bordered table-hover">
                    <thead>
                        <tr>
                            {{-- <th>No</th> --}}
                            <th>ID</th>
                            <th>Username</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($profil as $data)
                            <tr>
                                {{-- <td>{{ $no++ }}</td> --}}
                                <td class="text-center">{{ $data->id_profil }}</td>
                                <td>{{ $data->nama_profil }}</td>
                                <td>{{ $data->judul_profil }}</td>
                                <td>{!! Str::limit(strip_tags($data->isi_profil), 160) !!}</td>
                                <td class="text-center">
                                    <a href="/admin-profil/editprofil/{{ $data->id_profil }}" id=""><i
                                            style="color:#35C668" class="fas fa-edit"></i></a>
                                    @if (4 <= $data->id_profil && $data->id_profil <= 996)
                                        <button type="button" class="btn bg-transparent" data-toggle="modal"
                                            data-target="#deleteProfil{{ $data->id_profil }}"><i style="color:#C43030"
                                                class="fas fa-trash color-danger trash-keynote"></i>
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Akhir Isi Profil -->

    <!-- Modal Delete News-->
    @foreach ($profil as $data)
        <div class="modal fade" id="deleteProfil{{ $data->id_profil }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Profil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Anda ingin menghapus Profil "{{ $data->judul_profil }}" ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" focused>Batal</button>
                        <a href="/admin-profil/deleteprofil/{{ $data->id_profil }}" type="button"
                            class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

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

    <script>
        $(function() {
            $("#tbl_profil").DataTable({
                stateSave: true,
            });
        });
    </script>
@endsection
