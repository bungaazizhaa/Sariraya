@extends('layouts.home-template')
@section('content')
    <!-- Slider -->
    <div class="slider-kontak">
        <div class="myslider-kontak " style="display: block;">
            <div class="txt">
                <h1 style="color: aliceblue;">THANK YOU !</h1>
                <p> for your interest in Sariraya Corporation.</p>
                <br>
                <h5>For inquiries please follow the instructions below:</h5>
            </div>
            <img src="{{ asset('assets/images/foto1.jpg') }}" alt="" style="width:100%; height:100%;">
        </div>
    </div>

    <!-- Akhir Slider -->

    <!-- Form -->
    <div class="kontak">
        <div class="container">
            <div class="japan">
                <div class="row-kontak">
                    <div class="col-lg-6">
                        <div class="kepada">
                            <h2>For Further Information</h2>
                            <p>Japanese People</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="kontak-box">
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Company</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">State</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Telephone Number</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <a href="" class="btn btn-primary tombol">Submit</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="indo">
                <div class="row-kontak">
                    <div class="col-lg-6">
                        <div class="kepada">
                            <h2>For Further Information</h2>
                            <p>Indonesian People</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="kontak-box">
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Company</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">State</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Telephone Number</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <a href="" class="btn btn-primary tombol">Submit</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info">
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
