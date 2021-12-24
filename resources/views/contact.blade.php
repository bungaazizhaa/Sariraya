<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/css/jsfile.js') }}"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/images') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">

</head>

<body>
    @include('layouts.navbar')

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
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        rows="3"></textarea>
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
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        rows="3"></textarea>
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

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row-footer">
                <div class="col-sm-3">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" width="200px">
                    <p>Pioneer INDONESIAN halal foods
                        company in Japan</p>
                    <div class="social">
                        <img src="{{ asset('assets/images/gm.png') }}" alt="">
                        <img src="{{ asset('assets/images/ig.png') }}" alt="">
                        <img src="{{ asset('assets/images/fb.png') }}" alt="">
                    </div>
                </div>
                <div class="col-sm-3">
                    <h5>PRODUCTS</h5>
                    <div class="produk-footer">
                        <p><a href="">Tempe Factory</a></p>
                        <p><a href="">Halal Mart</a></p>
                        <p><a href="">Online Shop</a></p>
                        <p><a href="">Halal Fried Chiken</a></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h5>CONTACTS</h5>
                    <div class="kontak-footer">
                        <p>+81-0563-54-0372</p>
                        <p>+81-0563-77-3389</p>
                        <p>satoya@helen.ocn.ne.jp</p>
                        <p>shop@sariraya.com</p>
                    </div>

                </div>
                <div class="col-sm-3">
                    <p><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.250239400547!2d137.058527214581!3d34.900169180018096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004974a89e2e12f%3A0x6799466b794d4d99!2sKitaura-75-1%20Yonezuch%C5%8D%2C%20Nishio%2C%20Aichi%20445-0802%2C%20Jepang!5e0!3m2!1sid!2sid!4v1640087131945!5m2!1sid!2sid"
                            width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; | Made by Awardee Sariraya 2021</p>
            </div>
        </div>
    </div>
    <!-- Akhir Footer -->

    <!-- Js for menu toggle -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px"
            } else {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>
