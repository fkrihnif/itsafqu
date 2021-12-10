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
            <a class="btn btn-lg btn-primary" href="{{ route('orderPaket', 'standar') }}">PESAN</a>
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
            <a class="btn btn-lg btn-primary" href="{{ route('orderPaket', 'premium') }}">PESAN</a>
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
            <a class="btn btn-lg btn-primary" href="{{ route('orderPaket', 'eksklusif') }}">PESAN</a>
            <ul>
                <li>Exclusive Design</li>
                                <li class=" text-color-primary">Subdomain</li>
                                <li>Halaman Kedua Mempelai</li>
                                <li>Halaman Kegiatan/Acara</li>
                                <li class=" text-color-primary">Halaman Cerita Cinta</li>
                                <li>Buku Tamu</li>
                                <li class=" text-color-primary">QR Qode (Tamu) <i style="color: red">coming soon</i></li>
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

</div>

<!-- end: page -->
@endsection