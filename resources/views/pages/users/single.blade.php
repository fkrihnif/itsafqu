@extends('layouts.users.main')

@section('container')

<!-- start: page -->

<div class="row">
    <div class="col">
        <h4 class="mt-0 mb-0 font-weight-bold text-dark">Single Item (WEB)</h4>
    </div>
</div>
<div class="row mb-5">
    <div class="col-lg-6 col-xl-3">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                </div>

                <h2 class="card-title">WEB 1</h2>
            </header>
            <div class="card-body">
                <div class="owl-carousel owl-theme" data-plugin-carousel
                    data-plugin-options='{ "dots": true, "autoplay": true, "autoplayTimeout": 3000, "loop": true, "margin": 10, "nav": false, "items": 1 }'>
                    <div class="item"><img class="img-thumbnail" src="user/img/projects/project-1.jpg" alt=""></div>
                    <div class="item"><img class="img-thumbnail" src="user/img/projects/project-2.jpg" alt=""></div>
                    <div class="item"><img class="img-thumbnail" src="user/img/projects/project-3.jpg" alt=""></div>
                </div>
            </div>
            <div class="d-sm-flex align-items-center justify-content-between mt-2 mx-4">
                <a href=""><button type="button" class="btn btn-info btn-sm mb-2">Pesan</button></a>
                <a href=""><button type="button" class="btn btn-dark btn-sm mb-2">Preview</button></a>
            </div>
        </section>
    </div>
    <div class="col-lg-6 col-xl-3">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                </div>

                <h2 class="card-title">WEB 2</h2>
            </header>
            <div class="card-body">
                <div class="owl-carousel owl-theme" data-plugin-carousel
                    data-plugin-options='{ "dots": true, "autoplay": true, "autoplayTimeout": 3000, "loop": true, "margin": 10, "nav": false, "items": 1 }'>
                    <div class="item"><img class="img-thumbnail" src="user/img/projects/project-1.jpg" alt=""></div>
                    <div class="item"><img class="img-thumbnail" src="user/img/projects/project-2.jpg" alt=""></div>
                    <div class="item"><img class="img-thumbnail" src="user/img/projects/project-3.jpg" alt=""></div>
                </div>
            </div>
            <div class="d-sm-flex align-items-center justify-content-between mt-2 mx-4">
                <a href=""><button type="button" class="btn btn-info btn-sm mb-2">Pesan</button></a>
                <a href=""><button type="button" class="btn btn-dark btn-sm mb-2">Preview</button></a>
            </div>
        </section>
    </div>
    <div class="col-lg-6 col-xl-3">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                </div>

                <h2 class="card-title">WEB 3</h2>
            </header>
            <div class="card-body">
                <div class="owl-carousel owl-theme" data-plugin-carousel
                    data-plugin-options='{ "dots": true, "autoplay": true, "autoplayTimeout": 3000, "loop": true, "margin": 10, "nav": false, "items": 1 }'>
                    <div class="item"><img class="img-thumbnail" src="user/img/projects/project-1.jpg" alt=""></div>
                    <div class="item"><img class="img-thumbnail" src="user/img/projects/project-2.jpg" alt=""></div>
                    <div class="item"><img class="img-thumbnail" src="user/img/projects/project-3.jpg" alt=""></div>
                </div>
            </div>
            <div class="d-sm-flex align-items-center justify-content-between mt-2 mx-4">
                <a href=""><button type="button" class="btn btn-info btn-sm mb-2">Pesan</button></a>
                <a href=""><button type="button" class="btn btn-dark btn-sm mb-2">Preview</button></a>
            </div>
        </section>
    </div>
    <div class="col-lg-6 col-xl-3">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                </div>

                <h2 class="card-title">WEB 4</h2>
            </header>
            <div class="card-body">
                <div class="owl-carousel owl-theme" data-plugin-carousel
                    data-plugin-options='{ "dots": true, "autoplay": true, "autoplayTimeout": 3000, "loop": true, "margin": 10, "nav": false, "items": 1 }'>
                    <div class="item"><img class="img-thumbnail" src="user/img/projects/project-1.jpg" alt=""></div>
                    <div class="item"><img class="img-thumbnail" src="user/img/projects/project-2.jpg" alt=""></div>
                    <div class="item"><img class="img-thumbnail" src="user/img/projects/project-3.jpg" alt=""></div>
                </div>
            </div>
            <div class="d-sm-flex align-items-center justify-content-between mt-2 mx-4">
                <a href=""><button type="button" class="btn btn-info btn-sm mb-2">Pesan</button></a>
                <a href=""><button type="button" class="btn btn-dark btn-sm mb-2">Preview</button></a>
            </div>
        </section>
    </div>
</div>

<div class="row pt-0">
    <div class="col">
        <h4 class="mt-0 mb-0 font-weight-bold text-dark">Single Item (Gambar)</h4>
        <p>Set the table with less plans</p>
    </div>
</div>
<section class="media-gallery">
    <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">
        <div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
                <div class="thumb-preview">
                    <a class="thumb-image" href="user/img/projects/project-1.jpg">
                        <img src="user/img/projects/project-1.jpg" class="img-fluid" alt="Project">
                    </a>
                    <div class="mg-thumb-options">
                        <div class="mg-zoom"><i class="bx bx-search"></i></div>
                        <div class="mg-toolbar">
                            <div class="mg-group">
                                <div class="d-flex justify-content-center">
                                    <a href=""><button type="button" class="btn btn-info btn-sm mb-2">Pesan</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="mg-title font-weight-semibold">template1<small>.png</small></h5>
                <div class="mg-description">
                    <small class="float-left text-muted">GAMBAR</small>
                    <small class="float-end text-muted">07/10/2021</small>
                </div>
            </div>
        </div>
        <div class="isotope-item col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
                <div class="thumb-preview">
                    <a class="thumb-image" href="user/img/projects/project-2.jpg">
                        <img src="user/img/projects/project-2.jpg" class="img-fluid" alt="Project">
                    </a>
                    <div class="mg-thumb-options">
                        <div class="mg-zoom"><i class="bx bx-search"></i></div>
                        <div class="mg-toolbar">
                            <div class="mg-group">
                                <div class="d-flex justify-content-center">
                                    <a href=""><button type="button" class="btn btn-info btn-sm mb-2">Pesan</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="mg-title font-weight-semibold">template2<small>.png</small></h5>
                <div class="mg-description">
                    <small class="float-left text-muted">GAMBAR</small>
                    <small class="float-end text-muted">07/10/2021</small>
                </div>
            </div>
        </div>
        <div class="isotope-item video col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
                <div class="thumb-preview">
                    <a class="thumb-image" href="user/img/projects/project-5.jpg">
                        <img src="user/img/projects/project-5.jpg" class="img-fluid" alt="Project">
                    </a>
                    <div class="mg-thumb-options">
                        <div class="mg-zoom"><i class="bx bx-search"></i></div>
                        <div class="mg-toolbar">
                            <div class="mg-group">
                                <div class="d-flex justify-content-center">
                                    <a href=""><button type="button" class="btn btn-info btn-sm mb-2">Pesan</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="mg-title font-weight-semibold">template3<small>.png</small></h5>
                <div class="mg-description">
                    <small class="float-left text-muted">GAMBAR</small>
                    <small class="float-end text-muted">07/10/2021</small>
                </div>
            </div>
        </div>
        <div class="isotope-item image col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
                <div class="thumb-preview">
                    <a class="thumb-image" href="user/img/projects/project-4.jpg">
                        <img src="user/img/projects/project-4.jpg" class="img-fluid" alt="Project">
                    </a>
                    <div class="mg-thumb-options">
                        <div class="mg-zoom"><i class="bx bx-search"></i></div>
                        <div class="mg-toolbar">
                            <div class="mg-group">
                                <div class="d-flex justify-content-center">
                                    <a href=""><button type="button" class="btn btn-info btn-sm mb-2">Pesan</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="mg-title font-weight-semibold">template4<small>.png</small></h5>
                <div class="mg-description">
                    <small class="float-left text-muted">GAMBAR</small>
                    <small class="float-end text-muted">07/10/2021</small>
                </div>
            </div>
        </div>
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
            <div class="col-md-4">
                <div class="embed-responsive embed-responsive-1by1">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iem8iHOVN_c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="d-flex justify-content-center">
                    <a href=""><button type="button" class="btn btn-info btn-sm mb-2">Pesan</button></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="embed-responsive embed-responsive-1by1">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/T5Zs8zbHdHI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="d-flex justify-content-center">
                    <a href=""><button type="button" class="btn btn-info btn-sm mb-2">Pesan</button></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="embed-responsive embed-responsive-1by1">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HzqV3TXjCCg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="d-flex justify-content-center">
                    <a href=""><button type="button" class="btn btn-info btn-sm mb-2">Pesan</button></a>
                </div>
            </div>
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
                    <a href="/ProdukPaket" class="btn btn-danger text-color-hover-dark"><i
                            class="fas fa-shopping-cart"></i> Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- end: page -->
@endsection