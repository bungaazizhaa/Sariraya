@extends('layouts.admin-template')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">News</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">News</li>
            <li class="breadcrumb-item active">Edit News</li>
        </ol>

        <!-- Edit News -->
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{ url('admin-profil') }}"><button class="btn btn-primary">Back</button></a>
            </div>
            <div class="card-body">
                <form action="/admin-profil/updateprofil/{{ $profil->id_profil }}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <input name="id_profil" type="text" hidden class="form-control" id="id_profil" placeholder=""
                            value="{{ old('id_profil', $profil->id_profil) }}">
                        <div class="text-danger">
                            @error('id_profil')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        {{-- <label class="mb-1" for="judulNewsInput">Nama Profil</label> --}}
                        <input name="nama_profil" type="hidden" class="form-control" id="nama_profil" placeholder=""
                            value="{{ old('nama_profil', $profil->nama_profil) }}">
                        <div class="text-danger">
                            @error('nama_profil')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-1" for="judulNewsInput">Judul Profil</label>
                        <input name="judul_profil" type="text" class="form-control" id="judul_profil" placeholder=""
                            value="{{ old('judul_profil', $profil->judul_profil) }}">
                        <div class="text-danger">
                            @error('judul_profil')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-1" for="isiProfilInput">Isi Profil</label>
                        <textarea id="summernote" name="isi_profil" class="form-control" id="isi_profil"
                            rows="3">{{ old('isi_profil', $profil->isi_profil) }}</textarea>
                        <div class="text-danger">
                            @error('isi_profil')
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
        <!-- Akhir Edit News -->
    </div>

    {{-- Script Only For This Page --}}
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
    <script type="text/javascript">
        $(function() {
            $('#datetimepicker1').datetimepicker({
                format: 'YYYY/MM/DD'
            });
        });
    </script>
@endsection
