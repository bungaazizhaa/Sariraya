@extends('layouts.admin-template')

@section('content')
    <!-- Isi Content -->
    <h1 class="mt-4">Dashboard Admin</h1>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card border-info mb-3">
                <div class="card-header bg-primary">
                    <h4 class="card-title m-0 text-white">Catatan<span><button
                                class="btn text-white bg-transparent float-right py-0" data-toggle="modal"
                                data-target="#addCatatan"><i class="fas fa-plus"></i></button></span>
                    </h4>

                </div>
                <div class="card-body m-0">
                    <div class="row">

                        @foreach ($catatan as $data)
                            <div class="col-12">
                                <div class="card text-center border-info my-1">
                                    <div class="card-body">
                                        <button type="button"
                                            class="btn btn-sm bg-transparent d-flex float-right mt-n3 mr-n3"
                                            data-toggle="modal" data-target="#deleteCatatan{{ $data->id_catatan }}"><i
                                                style="color:#c95151" class="fas fa-trash color-danger trash-keynote"></i>
                                        </button>
                                        <button class="btn btn-sm d-flex float-right mt-n3 mx-n2" data-toggle="modal"
                                            data-target="#editCatatan{{ $data->id_catatan }}" id=""><i
                                                style="color:#35C668" class="fas fa-edit"></i></button>
                                        <h5 class="card-title text-left" style="width: 80%">{{ $data->judul_catatan }}
                                        </h5>
                                        <div class="card-text text-left">{!! $data->isi_catatan !!}</div>
                                        <p class="card-text mt-n2 mb-n3 text-right mr-n2">
                                            <small {{-- class="text-muted">{{ date('d M Y - H:i:s', strtotime($data->date_created)) }} --}} class="text-muted">Updated at
                                                {{ date('d M Y - H:i:s', strtotime($data->date_created)) }}
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Add Catatan-->
    <div class="modal fade" id="addCatatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Catatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('addcatatan') }}" method="POST">
                        @csrf
                        <div class="form-group mb-2">
                            <input name="id_catatan" type="text" hidden class="form-control" id="id_catatan"
                                placeholder="" value="{{ old('id_catatan') }}">
                            <div class="text-danger">
                                @error('id_catatan')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="mb-1" for="judulCatataInput">Judul Catatan</label>
                            <input name="judul_catatan" type="text" placeholder="Tulis judul catatan..."
                                class="form-control" id="judul_catatan" placeholder=""
                                value="{{ old('judul_catatan') }}">
                            <div class="text-danger">
                                @error('judul_catatan')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="mb-1" for="isiCatataInput">Isi Catatan</label>
                            <textarea id="summernote" name="isi_catatan" class="form-control" id="isi_catatan"
                                rows="3">{{ old('isi_catatan') }}</textarea>
                            <div class="text-danger">
                                @error('isi_catatan')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" focused>Batal</button>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Catatan-->
    @foreach ($catatan as $data)

        <div class="modal fade" id="editCatatan{{ $data->id_catatan }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Catatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('editcatatan', $data->id_catatan) }}" method="POST">
                            @csrf
                            <div class="form-group mb-2">
                                <input name="id_catatan" type="text" hidden class="form-control" id="id_catatan"
                                    placeholder="" value="{{ old('id_catatan', $data->id_catatan) }}">
                                <div class="text-danger">
                                    @error('id_catatan')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label class="mb-1" for="judulCatataInput">Judul Catatan</label>
                                <input name="judul_catatan" type="text" class="form-control" id="judul_catatan"
                                    placeholder="" value="{{ old('judul_catatan', $data->judul_catatan) }}">
                                <div class="text-danger">
                                    @error('judul_catatan')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label class="mb-1" for="isiCatataInput">Isi Catatan</label>
                                <textarea id="summernote2" name="isi_catatan" class="form-control summernote2"
                                    id="isi_catatan" rows="3">{{ old('isi_catatan', $data->isi_catatan) }}</textarea>
                                <div class="text-danger">
                                    @error('isi_catatan')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" focused>Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal Delete Catatan-->
    @foreach ($catatan as $data)
        <div class="modal fade" id="deleteCatatan{{ $data->id_catatan }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Catatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Anda ingin menghapus catatan : "{{ $data->judul_catatan }}" ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" focused>Batal</button>
                        <a href="/admin-catatan/deletecatatan/{{ $data->id_catatan }}" type="button"
                            class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Tulis isi catatan disini...',
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
    @foreach ($catatan as $data)
        <script>
            $(document).ready(function() {
                $('.summernote2').summernote({
                    placeholder: 'Tulis isi catatan disini...',
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
    @endforeach

@endsection
