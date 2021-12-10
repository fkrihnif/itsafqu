@extends('layouts.landing.main2')

@section('container')

<div role="main" class="main">

<div class="container py-5 mt-4 mb-3"">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-8 col-xl-6">

        <div class="row pt-3">
          <div class="col text-center">
            <h1>Tutorial!</h1>
            <p tyle="font-size: 15px;font-weight:500; ">Cara menambahkan MAPS ke undangan </p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col text-left">
            <p tyle="font-size: 15px;font-weight:500; ">1. Buka www.google.com/maps tentukan dan cari lokasi pernikahan kamu</p>
            <p tyle="font-size: 15px;font-weight:500; ">2. Jika sudah kira-kira tampilannya seperti gambar di bawah ini, kemudian tekan tombol <strong>Share</strong></p>
            <img src="{{ url('frontend/img/maps1.png') }}" width="100%">
            <p tyle="font-size: 15px;font-weight:500; ">3. Akan muncul tampilan seperti gambar di bawah ini, pilih <strong>Embed Maps</strong></p>
            <img src="{{ url('frontend/img/maps2.png') }}" width="100%">
            <p tyle="font-size: 15px;font-weight:500; ">4. Lalu akan tampil seperti gambar di bawah ini dan klik <strong>Copy HTML</strong> </p>
            <img src="{{ url('frontend/img/maps3.png') }}" width="100%">
            <p tyle="font-size: 15px;font-weight:500; ">5. Terakhir tinggal kamu masukkan linknya ke dalam form yang sudah disediakan kemudian simpan</p>
            <img src="{{ url('frontend/img/maps4.png') }}" width="100%">
          </div>
        </div>

      </div>
    </div>
  </div>

</div>

<footer id="footer"
class="bg-color-dark-scale-5 border border-end-0 border-start-0 border-bottom-0 border-color-light-3 mt-0">
<div class="container text-center my-3 py-5">
    <a href="#" class="goto-top">
        <img src="{{ asset('user/img/logoputih.png')}}" data-plugin-lazyload data-plugin-options="{'threshold': 500}"
            data-original="{{ asset('user/img/logoputih.png')}}" width="102" height="45" class="mb-4 appear-animation"
            alt="Porto" data-appear-animation="fadeIn" data-appear-animation-delay="300">
    </a>
    <p class="font-weight-500 text-4 ls-0 mb-4">Solusi Undangan Digital Anda
    </p>
    <ul class="social-icons social-icons-big social-icons-dark-2">
        <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank"
                title="Instagram"><i class="fab fa-instagram"></i></a></li>
        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
        <li class="social-icons-youtube"><a href="http://www.youtube.com/" target="_blank"
                title="Youtube"><i class="fab fa-youtube"></i></a></li>
    </ul>
</div>
<div class="copyright bg-color-dark-scale-4 py-4">
    <div class="container text-center py-2">
        <p class="mb-0 text-2 ls-0">Copyright 2021 ITSAFQU- All Rights Reserved</p>
    </div>
</div>
</footer>
@endsection