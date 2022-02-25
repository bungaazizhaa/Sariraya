@extends('layouts.admin-template')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">News</h1>

        <!-- Edit News -->
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{ url('admin-profil') }}"><button class="btn btn-primary">Back</button></a>
            </div>
            <div class="card-body">
                <form action="/admin-profil/updateprofil/{{ $profil->id_profil }}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        @if (4 <= $profil->id_profil && $profil->id_profil <= 996)
                            <label class="mb-1 font-weight-bold" for="judulNewsInput">ID</label>
                        @endif
                        <input name="id_profil" type="text" @if ($profil->id_profil < 4 || $profil->id_profil > 996) hidden @endif
                            class="form-control" id="id_profil" placeholder=""
                            value="{{ old('id_profil', $profil->id_profil) }}">
                        @if (4 <= $profil->id_profil && $profil->id_profil <= 996)
                            <small>Angka yang menentukan Urutan Tampilan, Tidak Boleh Sama dengan yang sudah
                                Ada, Tidak boleh angka 1, 2, 3, 997, 998, dan 999.</small>
                        @endif
                        <div class="text-danger">
                            @error('id_profil')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        @if (4 <= $profil->id_profil && $profil->id_profil <= 996)
                            <label class="mb-1 font-weight-bold" for="judulNewsInput">Username</label>
                        @endif
                        <input name="nama_profil" type="text" @if ($profil->id_profil < 4 || $profil->id_profil > 996) hidden @endif
                            class="form-control" id="nama_profil" placeholder=""
                            value="{{ old('nama_profil', $profil->nama_profil) }}">
                        <div class="text-danger">
                            @error('nama_profil')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-2">

                        <label class="mb-1 font-weight-bold" for="judulNewsInput">Judul</label>
                        <input name="judul_profil" type="text" class="form-control" id="judul_profil" placeholder=""
                            value="{{ old('judul_profil', $profil->judul_profil) }}">
                        <div class="text-danger">
                            @error('judul_profil')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-1 font-weight-bold" for="isiProfilInput">Isi</label>
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
