@extends('layouts.admin-template')

@section('content')
    <h1 class="mt-4">Tambah News</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item">News</li>
        <li class="breadcrumb-item active">Add News</li>
    </ol>

    <!-- Input News -->
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
                        <input type="file" name="gambar_news" class="" id="gambar_news"
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
                    <input name="id_news" type="text" hidden class="form-control" id="id_news" placeholder=""
                        value="{{ old('id_news') }}">
                    <div class="text-danger">
                        @error('id_news')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label class="mb-1" for="judulNewsInput">Judul Berita</label>
                    <input name="judul_news" type="text" class="form-control" id="judul_news" placeholder=""
                        value="{{ old('judul_news') }}">
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
                        <input autocomplete="off" name="tanggal_news" type="text" class="form-control pull-right"
                            id="datepicker1" value="{{ old('tanggal_news') }}">
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
@endsection
