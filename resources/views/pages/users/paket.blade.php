@extends('layouts.users.main')

@section('container')

<!-- start: page -->

<div class="row pt-0">
    <div class="col">
        <h4 class="mt-0 mb-0 font-weight-bold text-dark">Paket Undangan</h4>
        <p>Set the table with less plans</p>
    </div>
</div>

<div class="pricing-table row no-gutters mt-3 mb-3">
    <div class="col-lg-4">
        <div class="plan">
            <h3>STANDAR<span>75K</span></h3>
            <a class="btn btn-lg btn-primary" href="#">PESAN</a>
            <ul>
                <li>Exclusive Design</li>
                                <li>File Directory</li>
                                <li>Halaman Kedua Mempelai</li>
                                <li>Halaman Kegiatan/Acara</li>
                                <li>Buku Tamu</li>
                                <li>Halaman Ucapan Tamu</li>
                                <li>Lokasi (GMaps)</li>
                                <li>Bebas Pilih Template</li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="plan">
            <h3>PREMIUM<span>100K</span></h3>
            <a class="btn btn-lg btn-primary" href="#">PESAN</a>
            <ul>
                <li>Exclusive Design</li>
                                    <li class=" text-color-primary">Subdomain</li>
                                    <li>Halaman Kedua Mempelai</li>
                                    <li>Halaman Kegiatan/Acara</li>
                                    <li class=" text-color-primary">Halaman Cerita Cinta</li>
                                    <li>Buku Tamu</li>
                                    <li>Halaman Ucapan Tamu</li>
                                    <li>Lokasi (GMaps)</li>
                                    <li>Bebas Pilih Template</li>
                                    <li class=" text-color-primary">Foto<strong class=" text-sm-1 text-color-default">
                                            (Syarat dan Ketentuan Berlaku)</strong></li>
                                    <li class=" text-color-primary">Undangan Gambar</li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="plan">
            <h3>EKSKLUSIF<span>200K</span></h3>
            <a class="btn btn-lg btn-primary" href="#">PESAN</a>
            <ul>
                <li>Exclusive Design</li>
                                <li class=" text-color-primary">Subdomain</li>
                                <li>Halaman Kedua Mempelai</li>
                                <li>Halaman Kegiatan/Acara</li>
                                <li class=" text-color-primary">Halaman Cerita Cinta</li>
                                <li>Buku Tamu</li>
                                <li class=" text-color-primary">QR Qode (Tamu)</li>
                                <li>Halaman Ucapan Tamu</li>
                                <li>Lokasi (GMaps)</li>
                                <li>Bebas Pilih Template</li>
                                <li class=" text-color-primary">Foto <strong class=" text-sm-1 text-color-default">
                                        (Syarat dan Ketentuan Berlaku)</strong></li>
                                <li class=" text-color-primary">Video <strong class=" text-sm-1 text-color-default">
                                        (Syarat dan Ketentuan Berlaku)</strong></li>
                                <li class=" text-color-primary">Undangan Video</li>
                                <li class=" text-color-primary">Undangan Gambar</li>
            </ul>
        </div>
    </div>
</div>


<div class="row pt-0">
    <div class="col">
        <h4 class="mt-3 mb-0">PREVIEW SINGLE ITEM (WEB)</h4>
        <p>Set the table with small blocks</p>
    </div>
</div>

<div class="owl-carousel owl-theme" data-plugin-carousel data-plugin-options='{ "dots": true, "autoplay": true, "autoplayTimeout": 3000, "loop": true, "margin": 10, "nav": false, "responsive": {"0":{"items":1 }, "600":{"items":3 }, "1000":{"items":6 } }  }'>
    <div class="item"><img class="img-thumbnail" src="{{ asset('user/img/projects/project-1.jpg') }}" alt=""></div>
    <div class="item"><img class="img-thumbnail" src="{{ asset('user/img/projects/project-2.jpg') }}" alt=""></div>
    <div class="item"><img class="img-thumbnail" src="{{ asset('user/img/projects/project-3.jpg') }}" alt=""></div>
    <div class="item"><img class="img-thumbnail" src="{{ asset('user/img/projects/project-4.jpg') }}" alt=""></div>
    <div class="item"><img class="img-thumbnail" src="{{ asset('user/img/projects/project-5.jpg') }}" alt=""></div>
    <div class="item"><img class="img-thumbnail" src="{{ asset('user/img/projects/project-6.jpg') }}" alt=""></div>
    <div class="item"><img class="img-thumbnail" src="{{ asset('user/img/projects/project-7.jpg') }}" alt=""></div>
    <div class="item"><img class="img-thumbnail" src="{{ asset('user/img/projects/project-1.jpg') }}" alt=""></div>
    <div class="item"><img class="img-thumbnail" src="{{ asset('user/img/projects/project-2.jpg') }}" alt=""></div>
    <div class="item"><img class="img-thumbnail" src="{{ asset('user/img/projects/project-3.jpg') }}" alt=""></div>
    <div class="item"><img class="img-thumbnail" src="{{ asset('user/img/projects/project-4.jpg') }}" alt=""></div>
    <div class="item"><img class="img-thumbnail" src="{{ asset('user/img/projects/project-5.jpg') }}" alt=""></div>
    <div class="item"><img class="img-thumbnail" src="{{ asset('user/img/projects/project-6.jpg') }}" alt=""></div>
    <div class="item"><img class="img-thumbnail" src="{{ asset('user/img/projects/project-7.jpg') }}" alt=""></div>
 </div>

<div class="col-lg-6 col-xl-12 pt-xl-2 mt-xl-4">
    <div class="card card-modern">
        <div class="card-body py-4">
            <div class="row align-items-center">
                <div class="col-6 col-md-4">
                    <h3 class="text-4-1 my-0">3 Item (Web, Gambar, Video)</h3>
                    <strong class="text-6 text-color-dark">Single Item</strong>
                </div>
                <div class="col-6 col-md-4 border border-top-0 border-end-0 border-bottom-0 border-color-light-grey py-3">
                    <h3 class="text-4-1 text-color-danger line-height-2 my-0">Price <strong>DOWN &darr;</strong></h3>
                    <span>30 days</span>
                </div>
                <div class="col-md-4 text-left text-md-right pe-md-4 mt-4 mt-md-0 d-flex justify-content-end">
                    <a href="{{ route('single-produk') }}" class="btn btn-danger text-color-hover-dark"><i class="fas fa-shopping-cart"></i> Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- end: page -->
@endsection