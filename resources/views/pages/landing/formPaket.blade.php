@extends('layouts.users.main')

@section('container')
<head>
    <style>
        input[type=radio] {
            display: none;
        }
        label {
            cursor: pointer;
            -webkit-appearance: button;
            /* WebKit */
            -moz-appearance: button;
            /* Mozilla */
            -o-appearance: button;
            /* Opera */
            -ms-appearance: button;
            /* Internet Explorer */
            appearance: button;
            /* CSS3 */
        }
    </style>
</head>
<!-- start: page -->
    <div class="row">
        <div class="col-lg-12">
            <section class="card form-wizard" id="w2">
                <div class="tabs">
                    <ul class="nav nav-tabs nav-justify wizard-steps wizard-steps-style-2">
                        <li class="nav-item active">
                            <a href="#w2-account" data-bs-toggle="tab" class="nav-link text-center">
                                <span class="badge badge-primary">1</span>
                                Template Web
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#w2-profile" data-bs-toggle="tab" class="nav-link text-center">
                                <span class="badge badge-primary">2</span>
                                Template Gambar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#w2-confirm" data-bs-toggle="tab" class="nav-link text-center">
                                <span class="badge badge-primary">3</span>
                                Template Video
                            </a>
                        </li>
                    </ul>
                    <form class="form-horizontal" novalidate="novalidate">
                        <div class="tab-content">
                            <div id="w2-account" class="tab-pane p-3 active">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="mt-0 mb-0 font-weight-bold text-dark">TEMPLATE WEB</h4>
                                        <p>Pilih template WEB yang kamu sukai dan yang bikin tamu tertarik!</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <section class="media-gallery">
                                        <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">
                                            <div class="isotope-item image col-sm-6 col-md-4 col-lg-3">
                                                <div class="thumbnail cumaini">
                                                    <div class="thumb-preview barunich">
                                                        <a class="thumb-image" href="{{ asset('user/img/projects/project-1.jpg') }}">
                                                            <img src="{{ asset('user/img/projects/project-1.jpg') }}" class="img-fluid" alt="Project" style="height: 220px">
                                                        </a>
                                                        <div class="mg-thumb-options">
                                                            <div class="mg-zoom"><i class="bx bx-search"></i></div>
                                                        </div>
                                                    </div>
                                                    <h5 class="mg-title font-weight-semibold">Web Template 1</h5>
                                                    <div class="mg-description">
                                                        <small class="float-left badge badge-danger">Rp.70.000</small>
                                                        <small class="float-end text-muted">07/10/2021</small>
                                                    </div>
                                                    <div class="d-sm-flex align-items-center justify-content-between mt-2">
                                                        <input type="radio" name="termsR" id="w2-terms1" value="WEB 1" required>
                                                        <label for="w2-terms1" class="btn btn-info btn-sm mb-2">Pilih </label>
                                                        <a href="#" target="_blank" class="btn btn-dark btn-sm mb-2">Preview</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isotope-item image col-sm-6 col-md-4 col-lg-3">
                                                <div class="thumbnail cumaini">
                                                    <div class="thumb-preview">
                                                        <a class="thumb-image" href="{{ asset('user/img/projects/project-1.jpg') }}">
                                                            <img src="{{ asset('user/img/projects/project-1.jpg') }}" class="img-fluid" alt="Project" style="height: 220px">
                                                        </a>
                                                        <div class="mg-thumb-options">
                                                            <div class="mg-zoom"><i class="bx bx-search"></i></div>
                                                        </div>
                                                    </div>
                                                    <h5 class="mg-title font-weight-semibold">Web Template 2</h5>
                                                    <div class="mg-description">
                                                        <small class="float-left badge badge-danger">Rp.70.000</small>
                                                        <small class="float-end text-muted">07/10/2021</small>
                                                    </div>
                                                    <div class="d-sm-flex align-items-center justify-content-between mt-2">
                                                        <input type="radio" name="termsR" id="w2-terms2" value="WEB 2" required>
                                                        <label for="w2-terms2" class="btn btn-info btn-sm mb-2">Pilih </label>
                                                        <a href="#" target="_blank" class="btn btn-dark btn-sm mb-2">Preview</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isotope-item image col-sm-6 col-md-4 col-lg-3">
                                                <div class="thumbnail cumaini">
                                                    <div class="thumb-preview">
                                                        <a class="thumb-image" href="{{ asset('user/img/projects/project-1.jpg') }}">
                                                            <img src="{{ asset('user/img/projects/project-1.jpg') }}" class="img-fluid" alt="Project" style="height: 220px">
                                                        </a>
                                                        <div class="mg-thumb-options">
                                                            <div class="mg-zoom"><i class="bx bx-search"></i></div>
                                                        </div>
                                                    </div>
                                                    <h5 class="mg-title font-weight-semibold">Web Template 3</h5>
                                                    <div class="mg-description">
                                                        <small class="float-left badge badge-danger">Rp.70.000</small>
                                                        <small class="float-end text-muted">07/10/2021</small>
                                                    </div>
                                                    <div class="d-sm-flex align-items-center justify-content-between mt-2">
                                                        <input type="radio" name="termsR" id="w2-terms3" value="WEB 3" required>
                                                        <label for="w2-terms3" class="btn btn-info btn-sm mb-2">Pilih </label>
                                                        <a href="#" target="_blank" class="btn btn-dark btn-sm mb-2">Preview</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="tampil text-color-success">Template yang Diilih: </div>
                                </div>
                            </div>
                            <div id="w2-profile" class="tab-pane p-3">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="mt-0 mb-0 font-weight-bold text-dark">TEMPLATE GAMBAR</h4>
                                        <p>Pilih template gambar yang kamu sukai!</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <section class="media-gallery">
                                        <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">
                                            <div class="isotope-item image col-sm-6 col-md-4 col-lg-3">
                                                <div class="thumbnail cumaini2">
                                                    <div class="thumb-preview">
                                                        <a class="thumb-image" href="{{ asset('user/img/projects/project-1.jpg') }}">
                                                            <img src="{{ asset('user/img/projects/project-1.jpg') }}" class="img-fluid" alt="Project" style="height: 220px">
                                                        </a>
                                                        <div class="mg-thumb-options">
                                                            <div class="mg-zoom"><i class="bx bx-search"></i></div>
                                                        </div>
                                                    </div>
                                                    <h5 class="mg-title font-weight-semibold">Template Gambar 1</h5>
                                                    <div class="mg-description">
                                                        <small class="float-left badge badge-warning">Rp.25.000</small>
                                                        <small class="float-end text-muted">07/10/2021</small>
                                                    </div>
                                                    <div class="d-sm-flex align-items-center justify-content-between mt-2">
                                                        <input type="radio" name="termsR2" id="w2-terms4" value="GAMBAR 1" required>
                                                        <label for="w2-terms4" class="btn btn-info btn-sm mb-2">Pilih </label>
                                                        <a class="test-popup-link btn btn-dark btn-sm mb-2" href="{{ asset('user/img/projects/project-1.jpg') }}">PREVIEW</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isotope-item image col-sm-6 col-md-4 col-lg-3">
                                                <div class="thumbnail cumaini2">
                                                    <div class="thumb-preview">
                                                        <a class="thumb-image" href="{{ asset('user/img/projects/project-1.jpg') }}">
                                                            <img src="{{ asset('user/img/projects/project-1.jpg') }}" class="img-fluid" alt="Project" style="height: 220px">
                                                        </a>
                                                        <div class="mg-thumb-options">
                                                            <div class="mg-zoom"><i class="bx bx-search"></i></div>
                                                        </div>
                                                    </div>
                                                    <h5 class="mg-title font-weight-semibold">Template Gambar 2</h5>
                                                    <div class="mg-description">
                                                        <small class="float-left badge badge-warning">Rp.25.000</small>
                                                        <small class="float-end text-muted">07/10/2021</small>
                                                    </div>
                                                    <div class="d-sm-flex align-items-center justify-content-between mt-2">
                                                        <input type="radio" name="termsR2" id="w2-terms5" value="GAMBAR 2" required>
                                                        <label for="w2-terms5" class="btn btn-info btn-sm mb-2">Pilih </label>
                                                        <a class="test-popup-link btn btn-dark btn-sm mb-2" href="{{ asset('user/img/projects/project-1.jpg') }}">PREVIEW</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isotope-item image col-sm-6 col-md-4 col-lg-3">
                                                <div class="thumbnail cumaini2">
                                                    <div class="thumb-preview">
                                                        <a class="thumb-image" href="{{ asset('user/img/projects/project-1.jpg') }}">
                                                            <img src="{{ asset('user/img/projects/project-1.jpg') }}" class="img-fluid" alt="Project" style="height: 220px">
                                                        </a>
                                                        <div class="mg-thumb-options">
                                                            <div class="mg-zoom"><i class="bx bx-search"></i></div>
                                                        </div>
                                                    </div>
                                                    <h5 class="mg-title font-weight-semibold">Template Gambar 3</h5>
                                                    <div class="mg-description">
                                                        <small class="float-left badge badge-warning">Rp.25.000</small>
                                                        <small class="float-end text-muted">07/10/2021</small>
                                                    </div>
                                                    <div class="d-sm-flex align-items-center justify-content-between mt-2">
                                                        <input type="radio" name="termsR2" id="w2-terms6" value="GAMBAR 3" required>
                                                        <label for="w2-terms6" class="btn btn-info btn-sm mb-2">Pilih </label>
                                                        <a class="test-popup-link btn btn-dark btn-sm mb-2" href="{{ asset('user/img/projects/project-1.jpg') }}">PREVIEW</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="tampil2 text-color-success">Template yang Diilih: </div>
                                </div>
                            </div>
                            <div id="w2-confirm" class="tab-pane p-3">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="mt-0 mb-0 font-weight-bold text-dark">TEMPLATE VIDEO</h4>
                                        <p>Pilih template video yang singkat tapi penuh makna dan arti!</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <section class="media-gallery">
                                        <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">
                                            <div class="isotope-item image col-sm-6 col-md-4 col-lg-4">
                                                <div class="thumbnail cumaini3">
                                                    <div class="thumb-preview">
                                                        <div class="embed-responsive embed-responsive-1by1">
                                                            <iframe class="embed-responsive-item" style="width:100%;" src="https://www.youtube.com/embed/VbmDmggxauE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                    <h5 class="mg-title font-weight-semibold">Template Video 2</h5>
                                                    <div class="mg-description">
                                                        <small class="float-left badge badge-success">Rp.35.000</small>
                                                        <small class="float-end text-muted">07/10/2021</small>
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <input type="radio" name="termsR3" id="w2-terms7" value="VIDEO 1" required>
                                                        <label for="w2-terms7" class="btn btn-info btn-sm mb-2">Pilih</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isotope-item image col-sm-6 col-md-4 col-lg-4">
                                                <div class="thumbnail cumaini3">
                                                    <div class="thumb-preview">
                                                        <div class="embed-responsive embed-responsive-1by1">
                                                            <iframe class="embed-responsive-item" style="width:100%;" src="https://www.youtube.com/embed/1jsSUAKqinQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                    <h5 class="mg-title font-weight-semibold">Template Video 2</h5>
                                                    <div class="mg-description">
                                                        <small class="float-left badge badge-success">Rp.35.000</small>
                                                        <small class="float-end text-muted">07/10/2021</small>
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <input type="radio" name="termsR3" id="w2-terms8" value="VIDEO 2" required>
                                                        <label for="w2-terms8" class="btn btn-info btn-sm mb-2">Pilih</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="tampil3 text-color-success">Template yang Diilih: </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="checkbox-custom">
                                            <input type="checkbox" name="terms" id="w2-terms" required>
                                            <label for="w2-terms">I agree to the terms of service</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <ul class="pager">
                        <li class="previous disabled">
                            <a><i class="fas fa-angle-left"></i> Previous</a>
                        </li>
                        <li class="finish hidden float-end">
                            <a>Finish</a>
                        </li>
                        <li class="next">
                            <a>Next <i class="fas fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>

<!-- end: page -->
@endsection