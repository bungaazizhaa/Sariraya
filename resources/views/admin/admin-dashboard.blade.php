@extends('layouts.admin-template')

@section('content')
    <!-- Isi Content -->
    <h1 class="mt-4">Dashboard Admin</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Catatan
                </div>
                <div class="card-body">
                    <h5>Contact Person Admin</h5>
                    <p>Bunga Azizha <br> 085157884200</p>
                    <p>Alvin <br> 0895360242060</p>
                    <canvas id="myAreaChart" width="100%" height="40"></canvas>
                </div>
            </div>
        </div>
        <!-- 
                                <div class="col-xl-6">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-chart-bar me-1"></i>
                                            Bar Chart Example
                                        </div>
                                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                    </div>
                                </div>
                                 -->
    </div>
@endsection
