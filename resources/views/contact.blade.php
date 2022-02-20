@extends('layouts.home-template')
@section('content')
    <!-- Slider -->

    <div class="slider-tempe">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="txt">
                        <h1>THANK YOU !</h1>
                        <p>For your interest in Sariraya Corporation.</p>
                        <p>For inquiries please follow the instructions
                            below:</p>
                    </div>
                    <div class="slider-img" style="background-image: url('{{ asset('assets/images/banner4.png') }}');">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="txt">
                        <h1>THANK YOU !</h1>
                        <p>For your interest in Sariraya Corporation.</p>
                        <p>For inquiries please follow the instructions
                            below:</p>
                    </div>
                    <div class="slider-img"
                        style="background-image: url('{{ asset('assets/images/banner2.png') }}');">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="txt">
                        <h1>THANK YOU !</h1>
                        <p>For your interest in Sariraya Corporation.</p>
                        <p>For inquiries please follow the instructions
                            below:</p>
                    </div>
                    <div class="slider-img"
                        style="background-image: url('{{ asset('assets/images/banner3.png') }}');">
                    </div>
                </div>
            </div>

        </div>
    </div>




    <!-- Akhir Slider -->
    @if (session('pesan'))
        <div class="container mt-3">
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>Thank you for contacting us!</strong> {{ session('pesan') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
    <!-- Form -->
    <div class="kontak">
        <div class="container">
            <div class="japan my-3 my-md-5 ">
                <div class="row row-kontak">
                    <div class="col-12 col-md-6 text-md-left text-center d-flex my-auto">
                        <div class="kepada ml-md-5 mx-auto">
                            <h2>For Further Information</h2>
                            <p>Foreign People</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card kontak-box">
                            <div class="card-body">
                                <form action="/contact/insertcontact" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Name*</label>
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                            id="exampleFormControlInput1" required placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email*</label>
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                            id="exampleFormControlInput1" required placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Company</label>
                                        <input type="text" name="company" value="{{ old('company') }}"
                                            class="form-control" id="exampleFormControlInput1" placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">State</label>
                                        <input type="text" name="state" class="form-control" id="exampleFormControlInput1"
                                            placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Telephone Number</label>
                                        <input type="text" name="telephone" value="{{ old('telephone') }}"
                                            class="form-control" id="exampleFormControlInput1" placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Message*</label>
                                        <textarea name="message" required value="{{ old('message') }}"
                                            class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="button-submit">
                                        <button type="submit" class="btn btn-primary tombol">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="indo my-4">
                <div class="row row-kontak mb-4">
                    <div class="col-12 col-md-6  text-md-left text-center d-flex my-auto">
                        <div class="kepada ml-md-5 mx-auto">
                            <h2>For Further Information</h2>
                            <p>Indonesian People</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card kontak-box">
                            <div class="card-body">
                                <form action="/contact/insertcontact" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nama*</label>
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                            id="exampleFormControlInput1" required placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email*</label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control" id="exampleFormControlInput1" required placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Perusahaan</label>
                                        <input type="text" name="company" value="{{ old('company') }}"
                                            class="form-control" id="exampleFormControlInput1" placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        {{-- <label for="exampleFormControlInput1">State</label> --}}
                                        <input type="hidden" name="state" value="Indonesia" class="form-control"
                                            id="exampleFormControlInput1" placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nomor Telepon</label>
                                        <input type="text" name="telephone" value="{{ old('telephone') }}"
                                            class="form-control" id="exampleFormControlInput1" placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Pesan*</label>
                                        <textarea name="message" required value="{{ old('message') }}"
                                            class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="button-submit">
                                        <button type="submit" class="btn btn-primary tombol">Kirim</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info mb-3">
                <h2>Telephone Number</h2>
                <table>
                    <tr>
                        <th>Head Office-Nishioo Aichi</th>
                        <td>TEL : 0563-54-0372 (Business days 10:00～18:00)</td>
                    </tr>
                    <tr>
                        <th>Logistics warehouse</th>
                        <td>TEL : 0563-77-3389 (Business days 10:00～18:00)</td>
                    </tr>
                    <tr>
                        <th>Osaka Office</th>
                        <td>TEL : 06-6361-4156 (Business days 10:00～18:00) <br>
                            HP : 090-1784-4264 / 07055075207</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- Akhir Form -->
@endsection
