@extends('layouts.admin-template')

@section('content')
    <h1 class="mt-4">Contact</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Contact</li>
    </ol>

    <!-- Isi Form Information -->
    <div class="container-fluid">
        <h1 class="mt-4">Table Information</h1>
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tbl_contact" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Company</th>
                                <th>State</th>
                                <th>Telephone Number</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($contact as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->id_contact }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>
                                        <a
                                            href="mailto:{{ $data->email }}?subject=Email Reply from Sariraya regarding your message.&body=Your Message: {{ $data->message }}%0D%0AAt {{ $data->created_at }}%0D%0A">{{ $data->email }}</a>
                                        {{-- <a href="mailto:{{ $data->email }}">{{ $data->email }}</a> --}}
                                    </td>
                                    <td>{{ $data->message }}</td>
                                    <td>{{ $data->company }}</td>
                                    <td>{{ $data->state }}</td>
                                    <td>{{ $data->telephone }}</td>
                                    <td>{{ $data->created_at }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn bg-transparent" data-toggle="modal"
                                            data-target="#deleteContact{{ $data->id_contact }}"><i style="color:#C43030"
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
    </div>


    <!-- Modal Delete News-->
    @foreach ($contact as $data)
        <div class="modal fade" id="deleteContact{{ $data->id_contact }}" tabindex="-1" role="dialog"
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
                        Anda ingin menghapus pesan dari {{ $data->name }} (ID: {{ $data->id_contact }}) ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" focused>Batal</button>
                        <a href="/admin-contact/deletecontact/{{ $data->id_contact }}" type="button"
                            class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- Akhir Isi From Information -->

    <script>
        $(function() {
            $("#tbl_contact").DataTable({});
        });
    </script>
@endsection
