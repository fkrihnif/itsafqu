@extends('layouts.users.main')

@section('container')

<!-- start: page -->

<div class="row">
    <div class="col">
        <h4 class="mt-0 mb-0 font-weight-bold text-dark">Single Item (WEB)</h4>
    </div>
</div>
<div class="row mb-5">
    @foreach ($webs as $web)
    <div class="col-lg-6 col-xl-3">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                </div>

                <h2 class="card-title">{{ $web->nama }}</h2>
            </header>
            <div class="card-body">
                <div class="owl-carousel owl-theme" data-plugin-carousel
                    data-plugin-options='{ "dots": true, "autoplay": true, "autoplayTimeout": 3000, "loop": true, "margin": 10, "nav": false, "items": 1 }'>
                    <div class="item"><img class="img-thumbnail" src="{{ Storage::url($web->thumbnail) }}" alt="{{ $web->nama }}" style="height: 220px"></div>
                </div>
            </div>
            <div class="d-sm-flex align-items-center justify-content-between mt-2 mx-4">
                <a href="{{ route('order', $web->kode) }}" class="btn btn-info btn-sm mb-2">Pesan</a>
                <a href="{{ route('template-detail', $web->slug) }}" target="_blank"><button type="button"
                    class="btn btn-dark btn-sm mb-2">Preview</button></a>
            </div>
        </section>
    </div>
    @endforeach

</div>

<div class="row pt-0">
    <div class="col">
        <h4 class="mt-0 mb-0 font-weight-bold text-dark">Single Item (Gambar)</h4>
        <p>Set the table with less plans</p>
    </div>
</div>
<section class="media-gallery">
    <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">
       @foreach ($images as $image)
       <div class="isotope-item image col-sm-6 col-md-4 col-lg-3">
        <div class="thumbnail">
            <div class="thumb-preview">
                <a class="test-popup-link thumb-image" href="{{ Storage::url($image->thumbnail) }}">
                    <img src="{{ Storage::url($image->thumbnail) }}" class="img-fluid" alt="Project" style="height: 220px">
                </a>
                <div class="mg-thumb-options">
                    <div class="mg-zoom"><i class="bx bx-search"></i></div>
                    <div class="mg-toolbar">
                        <div class="mg-group">
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('order', $image->kode) }}" class="btn btn-info btn-sm mb-2">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="mg-title font-weight-semibold">{{ $image->nama }}</h5>
            <div class="mg-description">
                <small class="float-left text-muted">GAMBAR</small>
                <small class="float-end text-muted">07/10/2021</small>
            </div>
        </div>
    </div>
       @endforeach
    </div>
</section>

<div class="row pt-0">
    <div class="col">
        <h4 class="mt-0 mb-0 font-weight-bold text-dark">Single Item (Video)</h4>
        <p>Set the table with less plans</p>
    </div>
</div>
<section class="card">
    <div class="card-body">
        <div class="row">
            @foreach ($videos as $video)
            <div class="col-md-4">
                <div class="embed-responsive embed-responsive-1by1">
                    <iframe class="embed-responsive-item" src="{{ 'https://www.youtube.com/embed/'.substr($video->link, -11) }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('order', $video->kode) }}" class="btn btn-info btn-sm mb-2">Pesan</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<div class="col-lg-6 col-xl-12 pt-xl-2 mt-xl-4">
    <div class="card card-modern">
        <div class="card-body py-4">
            <div class="row align-items-center">
                <div class="col-6 col-md-4">
                    <h3 class="text-4-1 my-0">3 Pilihan</h3>
                    <strong class="text-6 text-color-dark">Paket Undangan</strong>
                </div>
                <div
                    class="col-6 col-md-4 border border-top-0 border-end-0 border-bottom-0 border-color-light-grey py-3">
                    <h3 class="text-4-1 text-color-danger line-height-2 my-0">Price <strong>DOWN &darr;</strong></h3>
                    <span>30 days</span>
                </div>
                <div class="col-md-4 text-left text-md-right pe-md-4 mt-4 mt-md-0 d-flex justify-content-end">
                    <a href="{{ route('paket-produk') }}" class="btn btn-danger text-color-hover-dark"><i
                            class="fas fa-shopping-cart"></i> Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- end: page -->
@endsection