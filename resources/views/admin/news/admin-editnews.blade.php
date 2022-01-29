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
                <a href="{{ url('admin-news') }}"><button class="btn btn-primary">Back</button></a>
            </div>
            <div class="card-body">
                <form action="/admin-news/updatenews/{{ $news->id_news }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2">
                        <label class="mb-1" for="inputGambar">Picture</label>
                        <div class="form-group mb-2">
                            <img src="{{ url('gambar_news/' . $news->gambar_news) }}" alt="" width="300px">
                        </div>
                        <div class="custom-file">
                            <input type="file" name="gambar_news" id="gambar_news"
                                value="{{ $news->gambar_news }}">{{ old('gambar_news') }}
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
                            value="{{ $news->id_news }}">
                        <div class="text-danger">
                            @error('id_news')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-1" for="judulNewsInput">Judul Berita</label>
                        <input name="judul_news" type="text" class="form-control" id="judul_news" placeholder=""
                            value="{{ $news->judul_news }}">
                        <div class="text-danger">
                            @error('judul_news')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <input name="slug" type="hidden" class="form-control" id="slug" placeholder=""
                            value="{{ $news->slug }}">
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-1" for="tanggalNewsInput">Tanggal</label>
                        <div class="input-group date">
                            <input autocomplete="off" name="tanggal_news" type="text" class="form-control pull-right"
                                id="datepicker1" value="{{ $news->tanggal_news }}">
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
                        <input name="tempat_news" class="form-control" id="tempat_news"
                            value="{{ $news->tempat_news }}">
                        <div class="text-danger">
                            @error('tempat_news')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-1" for="isiNewsInput">Isi</label>
                        <textarea id="summernote" name="isi_news" class="form-control" id="isi_news"
                            rows="3">{{ $news->isi_news }}</textarea>
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
@endsection
