@extends('layouts.users.main')

@section('container')

<!-- start: page -->
<div class="row">
    <div class="col-lg-6 col-xl-12">

        <div class="row">
            <div class="col-6">
                <div class="card card-modern">
                    <div class="card-body p-0">
                        <div class="widget-user-info">
                            <div class="widget-user-info-header">
                                <h2 class="font-weight-bold text-color-dark text-5">Hello, Nama User</h2>
                                <p class="mb-0">Pelanggan ke-N</p>

                                <div class="widget-user-acrostic bg-primary">
                                    <span class="font-weight-bold">ISB</span>
                                </div>
                            </div>
                            <div class="widget-user-info-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <strong class="text-color-dark text-5">Nama User</strong>
                                        <h3 class="text-4-1">Member sejak - N</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="pages-user-profile.html" class="btn btn-light btn-xl border font-weight-semibold text-color-dark text-3 mt-4">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6 col-xl-12 pb-2 pb-lg-0 mb-4 mb-lg-0">
                <div class="card card-modern">
                    <div class="card-body py-4">
                        <div class="row align-items-center">
                            <div class="col-6 col-md-4">
                                <h3 class="text-4-1 my-0">Total Pesanan Saya</h3>
                                <strong class="text-6 text-color-dark">4825</strong>
                            </div>
                            <div class="col-6 col-md-4 border border-top-0 border-end-0 border-bottom-0 border-color-light-grey py-3">
                                <h3 class="text-4-1 text-color-success line-height-2 my-0">Orders <strong>UP &uarr;</strong></h3>
                                <span>30 days</span>
                            </div>
                            <div class="col-md-4 text-left text-md-right pe-md-4 mt-4 mt-md-0 d-flex justify-content-end">
                                <a href="/PesananUser" class="btn btn-danger text-color-hover-dark"><i class="fas fa-eye"></i> Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-12 pt-xl-2 mt-xl-4">
                <div class="card card-modern">
                    <div class="card-body py-4">
                        <div class="row align-items-center">
                            <div class="col-6 col-md-4">
                                <h3 class="text-4-1 my-0">3 Pilihan</h3>
                                <strong class="text-6 text-color-dark">Paket Undangan</strong>
                            </div>
                            <div class="col-6 col-md-4 border border-top-0 border-end-0 border-bottom-0 border-color-light-grey py-3">
                                <h3 class="text-4-1 text-color-danger line-height-2 my-0">Price <strong>DOWN &darr;</strong></h3>
                                <span>30 days</span>
                            </div>
                            <div class="col-md-4 text-left text-md-right pe-md-4 mt-4 mt-md-0 d-flex justify-content-end">
                                <a href="/ProdukPaket" class="btn btn-danger text-color-hover-dark"><i class="fas fa-shopping-cart"></i> Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <a href="/ProdukSingle" class="btn btn-danger text-color-hover-dark"><i class="fas fa-shopping-cart"></i> Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end: page -->
@endsection