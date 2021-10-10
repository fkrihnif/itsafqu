@extends('layouts.landing.main')

@section('container')
<head>
    <style>
        /* penggunaan media query pada default tablet layout */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .gambar {
                width: auto !important;
                height: 400px;
                max-height: 400px;
            }
        }

        /* penggunaan media query pada mobile layout */
        @media only screen and (min-width: 468px) and (max-width: 767px) {
            .gambar {
                width: auto !important;
                height: 400px;
                max-height: 400px;
            }
        }
        @media only screen and (min-width: 100px) and (max-width: 467px) {
            .gambar {
                width: auto !important;
                height: 300px;
                max-height: 300px;
            }
        }

        /* penggunaan media query pada default monitor layout */
        @media only screen and (min-width: 992px) {
            .gambar {
                width: auto !important;
                height: 850px;
                max-height: 850px;
            }
        }
    </style>
</head>

<div role="main" class="main">
    <section class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0">
        <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-light" style="padding: 8rem 0;"></div>
        </div>
    </section>

    <div id="examples" class="container d-flex justify-content-center">

            <div class="col-sm-12 bg-secondary">
    
                <div class="row align-items-center">
                    <div class="col-sm-5">
    
                        <div class="pe-3 pb-3 pb-sm-0 border-right-light">
                            <h4 class="mb-2 w-100 text-align">Template Undangan Gambar Versi 1</h4>
                            <p class="m-0 w-100 text-align">Move slider on mouse hover option for before / after element.</p>
                        </div>
    
                    </div>
                    <div class="col-sm-7">
    
                        <div class="d-flex justify-content-center" data-plugin-before-after>
                            <!-- The before image is first -->
                            <img src="frontend/img/gambar/1a.jpg" class="gambar"/>
                            <!-- The after image is last -->
                            <img src="frontend/img/gambar/1b.jpg" class="gambar"/>
                        </div>
    
                    </div>
                </div>
    
            </div>
    </div>

    

</div>

@endsection