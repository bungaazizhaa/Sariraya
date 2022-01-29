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
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Company</th>
                                <th>State</th>
                                <th>Telephone Number</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                                <td style="white-space: pre-line">tes</td>
                                <td class="text-center">
                                    <a href=""><i style="color:#35C668" class="fas fa-edit"></i></a>
                                    <a><i data-toggle="modal" data-target=".bd-delete-modal-admin10" style="color:#C43030"
                                            data-id="" class="fas fa-trash color-danger trash-keynote"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Akhir Isi From Information -->
@endsection
