@extends('layouts.admin-template')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Profil</h1>

        <!-- Edit News -->
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{ url('admin-profil') }}"><button class="btn btn-primary">Back</button></a>
            </div>
            <div class="card-body">
                <form action="/admin-profil/insertprofil" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label class="mb-1 font-weight-bold" for="IdProfilInput">ID</label>
                        <input name="id_profil" type="text" class="form-control" id="id_profil"
                            placeholder="Angka diantara 4 sampai 996." value="{{ old('id_profil') }}">
                        <small>Angka yang menentukan Urutan Tampilan, Tidak Boleh Sama dengan yang sudah
                            Ada, Tidak boleh angka 1, 2, 3, 997, 998, dan 999.</small>
                        <div class="text-danger">
                            @error('id_profil')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-1 font-weight-bold" for="judulProfilInput">Username</label>
                        <input name="nama_profil" type="text" class="form-control" id="nama_profil"
                            placeholder="hurufkecil_tanpaspasi" value="{{ old('nama_profil') }}">
                        <div class="text-danger">
                            @error('nama_profil')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-1 font-weight-bold" for="judulProfilInput">Judul</label>
                        <input name="judul_profil" type="text" class="form-control" id="judul_profil"
                            placeholder="Nama Jabatan yang Akan Ditampilkan" value="{{ old('judul_profil') }}">
                        <div class="text-danger">
                            @error('judul_profil')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-1 font-weight-bold" for="isiProfilInput">Isi</label>
                        <textarea id="summernote" name="isi_profil" class="form-control" id="isi_profil"
                            rows="3">{{ old('isi_profil') }}</textarea>
                        <div class="text-danger">
                            @error('isi_profil')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="button-submit">
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
            </form>
        </div>
        <!-- Akhir Edit News -->
    </div>

    {{-- Script Only For This Page --}}
    {{-- <script>
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
    </script> --}}
    <script type="text/javascript">
        $(function() {
            $('#datetimepicker1').datetimepicker({
                format: 'YYYY/MM/DD'
            });
        });
    </script>
@endsection
