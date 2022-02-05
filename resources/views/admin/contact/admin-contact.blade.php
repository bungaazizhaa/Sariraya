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
                                        <a><i data-toggle="modal" data-target=".bd-delete-modal-admin10"
                                                style="color:#C43030" data-id=""
                                                class="fas fa-trash color-danger trash-keynote"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Akhir Isi From Information -->

    <script>
        $(function() {
            $("#tbl_contact").DataTable({});
        });
    </script>
@endsection
