@extends('layouts.landing.main2')

@section('container')

<head>
    <style>
        input.invalid {
            background-color: #f3dcdc
        }

        .tab {
            display: none
        }

        #prevBtn {
            background-color: #bbbbbb
        }

        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #797474;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5
        }

        .step.active {
            opacity: 1
        }

        .step.finish {
            background-color: #41ce46
        }

        .all-steps {
            text-align: center;
            margin-bottom: 15px
        }

        .thanks-message {
            display: none
        }

        .container input[type="radio"] {
            position: absolute;
            opacity: 0;
            cursor: pointer
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
            border-radius: 50%
        }
    </style>

<script>
    //your javascript goes here
    var currentTab = 0;
    document.addEventListener("DOMContentLoaded", function (event) {


        showTab(currentTab);

    });

    function showTab(n) {
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        var x = document.getElementsByClassName("tab");
        if (n == 1 && !validateForm()) return false;
        x[currentTab].style.display = "none";
        currentTab = currentTab + n;
        if (currentTab >= x.length) {
            // document.getElementById("regForm").submit();
            // return false;
            //alert("sdf");
            document.getElementById("nextprevious").style.display = "none";
            document.getElementById("all-steps").style.display = "none";
            document.getElementById("register").style.display = "none";
            document.getElementById("text-message").style.display = "block";




        }
        showTab(currentTab);
    }

    function validateForm() {
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        for (i = 0; i < y.length; i++) { if (y[i].value == "") { y[i].className += " invalid"; valid = false; } } if (valid) { document.getElementsByClassName("step")[currentTab].className += " finish"; } return valid;
    } function fixStepIndicator(n) { var i, x = document.getElementsByClassName("step"); for (i = 0; i < x.length; i++) { x[i].className = x[i].className.replace(" active", ""); } x[n].className += " active"; }
</script>
</head>

<div role="main" class="main">
    <div class="shape-divider shape-divider-bottom" style="height: 120px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 2000 245"
            preserveAspectRatio="xMinYMin">
            <path fill="#FFF" opacity="0.5" d="M2028.47,246.15v-39.09C1945.6,199.68,1869.96,195.8,1803,194c-71.99-1.93-137.53-4.37-225,1
                c-88.04,5.4-120.19,13.36-233,19c-55.14,2.76-102.19,5-165,3c-37.5-1.2-102.55-4.6-200-19c-89.42-13.21-145.61-26.73-276-57
                C520.19,98.33,428.29,76.99,402,72C243.75,41.93,118.41,28.67,37,22c-26.77-2.19-49.49-3.73-66.33-4.77v229.03h2057.82
                C2028.48,246.22,2028.47,246.19,2028.47,246.15z" />
            <path fill="#FFF" d="M1816,212c-58.78-4.11-116.63-8.07-195-9c-43.43-0.51-105.81-1.13-187,4c-33.73,2.13-29.27,2.64-127,10
                c-86.52,6.52-110.13,7.64-137,8c-11.31,0.15-53.81,0.58-110-3c-54.49-3.47-108.08-9.83-185-23c-69.21-11.85-114.89-21.96-202-41
                c-262.93-57.46-291.75-62.62-318-67C229.24,70,155.97,65.58,121,64C60.05,61.24,8.67,62.27-28.77,63.95v187.41H2028V232
            C1943.49,221.98,1871.42,215.88,1816,212z" />
        </svg>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="mb-3 text-center">Hai Kak, isi data dulu ya...</h4>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form id="regForm">
                                    <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span
                                            class="step"></span> <span class="step"></span> </div>
                                            <div class="tab">
                                                <h4 class="mb-3">Calon Mempelai Pria</h4>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label" for="w4-namaLengkap">Nama Lengkap</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            value="" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label" for="w4-namaLengkap">Nama
                                                            Panggilan</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            value="" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label" for="w4-namaLengkap">Nama Ayah</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            value="" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label" for="w4-namaLengkap">Nama Ibu</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            value="" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab">
                                                <h4 class="mb-3">Calon Mempelai Wanita</h4>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label" for="w4-namaLengkap">Nama Lengkap</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            value="" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label" for="w4-namaLengkap">Nama
                                                            Panggilan</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            value="" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label" for="w4-namaLengkap">Nama Ayah</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            value="" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label" for="w4-namaLengkap">Nama Ibu</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            value="" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab">
                                                <h4 class="mb-3">Informasi Akad</h4>
                                                <div class="form-gorup row pb-3">
                                                    <div class="col-lg-6">
                                                        <label class="form-label">Tanggal</label>
                                                        <input type="date" class="form-control" id="validationCustom01"
                                                            value="" required>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-label">Waktu / Jam</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            value="" placeholder="Contoh: 10.00 pagi" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label">Tempat/Lokasi</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            value="" placeholder="Contoh: Kediaman Mempelai Wanita"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label">Alamat</label>
                                                        <textarea value="" placeholder="Contoh: Jalan Ahmad Yani ....."
                                                            rows="3" class="form-control text-3 h-auto py-2" name="message"
                                                            required id="validationCustom01"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab">
                                                <h4 class="mb-3">Informasi Resepsi</h4>
                                                <div class="form-gorup row pb-3">
                                                    <div class="col-lg-6">
                                                        <label class="form-label">Tanggal</label>
                                                        <input type="date" class="form-control" id="validationCustom01"
                                                            value="" required>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-label">Waktu / Jam</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            value="" placeholder="Contoh: 10.00 pagi" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label">Tempat/Lokasi</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            value="" placeholder="Contoh: Kediaman Mempelai Wanita"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label">Alamat</label>
                                                        <textarea value="" placeholder="Contoh: Jalan Ahmad Yani ....."
                                                            rows="3" class="form-control text-3 h-auto py-2" name="message"
                                                            required id="validationCustom01"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label">Link Google Map</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            value="" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                    <div class="thanks-message text-center" id="text-message"> <img
                                        src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                                    <h3>Thanks for your Donation!</h3> <span>Your donation has been entered! We will contact you
                                        shortly!</span>
                                </div>
                                <div style="overflow:auto;" id="nextprevious">
                                    <div style="float:right;"> <button class="btn btn-danger" type="button" id="prevBtn"
                                            onclick="nextPrev(-1)">Sebelumnya</button> <button class="btn btn-primary" type="button" id="nextBtn"
                                            onclick="nextPrev(1)">Lanjut</button> 
                                        </div>
                                            
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer id="footer" class="mt-0">
    <div class="container my-4">
        <div class="row py-5">
            <div class="col-lg-2 align-self-center mb-5 mb-lg-0">
                <a href="demo-seo.html">
                    <img src="{{ asset('frontend/img/1.png')}}" class="img-fluid" alt="Demo SEO" width="130" />
                </a>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h4 class="font-weight-normal text-color-light text-5 ls-0 mb-4">Contact Details</h4>
                <ul class="list list-unstyled">
                    <li class="d-flex align-items-baseline"><i class="fab fa-whatsapp text-color-primary me-3"></i>
                        <div><a href="https://api.whatsapp.com/send?phone=62895380000239&text=Bismillah, Mohon Maaf, Izin bertanya apakah Apakah benar ini kontak WA dari ITSAFQU?"
                                target="_blank">(+62) 895-3800-00239 (Akh Lutfi)</a></div>
                    </li>
                    <li class="d-flex align-items-baseline"><i class="far fa-envelope text-color-primary me-3"></i>
                        <div><a href="mailto:itsafqubuntal27@gmail.com">itsafqubuntal27@gmail.com</a></div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <h4 class="font-weight-normal text-color-light text-5 ls-0 mb-4">Navigations</h4>
                <ul class="list list-unstyled">
                    <li class="mb-1">
                        <a class="link-hover-style-1 active" data-hash data-hash-offset="95" href="#home">Home</a>
                    </li>
                    <li class="mb-1">
                        <a class="link-hover-style-1" data-hash data-hash-offset="95" href="#about">Tentang
                            Kami</a>
                    </li>
                    <li class="mb-1">
                        <a class="link-hover-style-1" data-hash data-hash-offset="95" href="#solutions">Kenapa
                            Digital?</a>
                    </li>
                    <li class="mb-1">
                        <a class="link-hover-style-1" data-hash data-hash-offset="95" href="#pricing">Produk</a>
                    </li>
                    <li class="mb-1">
                        <a class="link-hover-style-1" data-hash data-hash-offset="95" href="#reviews">Testimoni</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <h4 class="font-weight-normal text-color-light text-5 ls-0 mb-4">Channel</h4>
                <ul class="footer-social-icons social-icons social-icons-clean social-icons-icon-light">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                            title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
                            title="Twitter"><i class="fab fa-instagram text-2"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank"
                            title="Linkedin"><i class="fab fa-youtube text-2"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col-auto w-100 text-align">
                    <p>ITSAFQU © Copyright 2021. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection

@push('addon-script')
<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });
    </script>
@endpush