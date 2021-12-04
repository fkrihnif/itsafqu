@extends('layouts.landing.main2')

@section('container')
<head>
    <style>
        /* input[type=radio] {
            display: none;
        } */
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

            /* HIDE RADIO */
[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + img {
  outline: 2px solid #f00;
}
    </style>
</head>
<!-- start: page -->
<div role="main" class="main">
    <div class="container py-5 mt-4 mb-3">
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
                        @if ($id_kode != 'standar')
                        <li class="nav-item">
                            <a href="#w2-profile" data-bs-toggle="tab" class="nav-link text-center">
                                <span class="badge badge-primary">2</span>
                                Template Gambar
                            </a>
                        </li>    
                        @endif
                        @if ($id_kode == 'eksklusif')
                        <li class="nav-item">
                            <a href="#w2-confirm" data-bs-toggle="tab" class="nav-link text-center">
                                <span class="badge badge-primary">3</span>
                                Template Video
                            </a>
                        </li>                            
                        @endif
                    </ul>
                    <form action="/orderPaket/store/{{ $id_kode }}" method="POST" class="form-horizontal" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
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
                                            @foreach ($webs as $web)
                                            <div class="isotope-item image col-sm-6 col-md-4 col-lg-3">
                                                <div class="thumbnail cumaini">
                                                    <div class="thumb-preview barunich">
                                                        {{-- <a class="thumb-image" href="{{ Storage::url($web->thumbnail) }}">
                                                            <img src="{{ Storage::url($web->thumbnail) }}" class="img-fluid" alt="Project" style="height: 220px">
                                                        </a>
                                                        <div class="mg-thumb-options">
                                                            <div class="mg-zoom"><i class="bx bx-search"></i></div>
                                                        </div> --}}
                                                        <label>
                                                            <input type="hidden" name="users_id" value="{{Auth::user()->id}}">
                                                            <input type="radio" name="web" value="{{ $web->id }}" checked>
                                                            <img src="{{ Storage::url($web->thumbnail) }}" class="img-fluid" alt="Project" style="height: 220px; width:220px">
                                                          </label>
                                                    </div>
                                                    <h5 class="mg-title font-weight-semibold">{{ $web->nama }}</h5>
                                                    <div class="mg-description">
                                                        <small class="float-left badge badge-danger">{{ $web->harga }}</small>
                                                        <small class="float-end text-muted">07/10/2021</small>
                                                    </div>
                                                    <div class="d-sm-flex align-items-center justify-content-between mt-2">
                                                        <a href="{{ route('template-detail', $web->slug) }}" target="_blank" class="btn btn-dark btn-sm mb-2">Preview</a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </section>
                                    {{-- <div class="tampil text-color-success">Template yang Diilih: </div> --}}
                                    @if ($id_kode == 'standar')
                                    <div class="row">
                                        <button type="submit" class="btn btn-primary" style="height: 40px;">
                                            Simpan dan Lanjut
                                        </button>
                                    </div>                                        
                                    @endif
                                </div>
                            </div>
                            @if ($id_kode != 'standar')
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
                                            @foreach ($images as $image)
                                            <div class="isotope-item image col-sm-6 col-md-4 col-lg-3">
                                                <div class="thumbnail cumaini2">
                                                    <div class="thumb-preview">
                                                        {{-- <a class="thumb-image" href="{{ Storage::url($image->thumbnail) }}">
                                                            <img src="{{ Storage::url($image->thumbnail) }}" class="img-fluid" alt="Project" style="height: 220px">
                                                        </a>
                                                        <div class="mg-thumb-options">
                                                            <div class="mg-zoom"><i class="bx bx-search"></i></div>
                                                        </div> --}}
                                                        <label>
                                                            <input type="radio" name="image" value="{{ $image->id }}" checked>
                                                            <img src="{{ Storage::url($image->thumbnail) }}" class="img-fluid" alt="Project" style="height: 220px; width:220px">
                                                          </label>
                                                    </div>
                                                    <h5 class="mg-title font-weight-semibold">{{ $image->judul }}</h5>
                                                    <div class="mg-description">
                                                        <small class="float-left badge badge-warning">{{ $image->harga }}</small>
                                                        <small class="float-end text-muted">07/10/2021</small>
                                                    </div>
                                                    <div class="d-sm-flex align-items-center justify-content-between mt-2">
                                                        {{-- <input type="radio" name="termsR2" id="w2-terms4" value="GAMBAR 1" required>
                                                        <label for="w2-terms4" class="btn btn-info btn-sm mb-2">Pilih </label> --}}
                                                        <a class="test-popup-link btn btn-dark btn-sm mb-2" href="{{ Storage::url($image->thumbnail) }}">PREVIEW</a>    
                                                        @foreach ($image->image_galleries as $gallery)
                                                        <div class="test-popup-link" href="{{ Storage::url($gallery->gallery) }}"></div>
                                                        @endforeach 
                                                        <div class="test-popup-link" href="{{ url('frontend/img/blank.gif') }}"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </section>
                                    {{-- <div class="tampil2 text-color-success">Template yang Diilih: </div> --}}
                                    @if ($id_kode == 'premium')
                                    <div class="form-group row mb-2">
                                        <div class="col-sm-12">
                                            <div class="checkbox-custom">
                                                <input type="checkbox" name="terms" id="w2-terms" required>
                                                <label for="w2-terms">I agree to the terms of service</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button type="submit" class="btn btn-primary" style="height: 40px;">
                                            Simpan dan Lanjut
                                        </button>
                                    </div>                                        
                                    @endif
                                </div>
                            </div>                                
                            @endif
                            @if ($id_kode == 'eksklusif')
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
                                            @foreach ($videos as $video)
                                            <div class="isotope-item image col-sm-6 col-md-4 col-lg-4">
                                                <div class="thumbnail cumaini3">
                                                    <div class="thumb-preview">
                                                        <label>
                                                            <input type="radio" name="video" value="{{ $video->id }}" checked>
                                                            <img src="{{ Storage::url($video->thumbnail) }}" class="img-fluid" alt="Project" style="height: 220px">
                                                          </label>
                                                        <div class="mg-thumb-options">
                                                            {{-- <div class="mg-zoom"><i class="bx bx-search"></i> --}}
                                                                <div class="embed-responsive embed-responsive-1by1">
                                                                    <iframe class="embed-responsive-item" style="width:100%;" src="{{ $video->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                </div>
                                                            {{-- </div> --}}
                                                        </div> 
                                                  
                                                    </div>
                                                    <h5 class="mg-title font-weight-semibold">{{ $video->nama }}</h5>
                                                    <div class="mg-description">
                                                        <small class="float-left badge badge-success">{{ $video->harga }}</small>
                                                        <small class="float-end text-muted">07/10/2021</small>
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        {{-- <input type="radio" name="termsR3" id="w2-terms7" value="VIDEO 1" required>
                                                        <label for="w2-terms7" class="btn btn-info btn-sm mb-2">Pilih</label> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach 
                                        </div>
                                    </section>
                                    {{-- <div class="tampil3 text-color-success">Template yang Diilih: </div> --}}
                                    @if ($id_kode == 'eksklusif')
                                    <div class="form-group row mb-2">
                                        <div class="col-sm-12">
                                            <div class="checkbox-custom">
                                                <input type="checkbox" name="terms" id="w2-terms" required>
                                                <label for="w2-terms">I agree to the terms of service</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button type="submit" class="btn btn-primary" style="height: 40px;">
                                            Simpan dan Lanjut
                                        </button>
                                    </div>                                        
                                    @endif
                                </div>
      
                            </div>
                            @endif
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
    </div>
</div>

<!-- end: page -->
@endsection