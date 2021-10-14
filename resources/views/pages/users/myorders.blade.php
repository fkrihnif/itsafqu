@extends('layouts.users.main')

@section('container')

<!-- start: page -->
<section class="card">
    <header class="card-header">
        <div class="card-actions">
            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
        </div>

        <h2 class="card-title">Riwayat Pesanan Saya</h2>
    </header>
    <div class="card-body">
        <table class="table table-bordered table-striped mb-0" id="datatable-editable">
            <thead>
                <tr>
                    <th>KODE PESANAN</th>
                    <th>JENIS PESANAN</th>
                    <th>STATUS</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr data-item-id="1">
                    <td>AA123</td>
                    <td>WEBSITE
                    </td>
                    <td><span class="badge badge-success">DIBAYAR</span> + <span class="badge badge-success">AKTIF</span></td>
                    <td>
                        <div class=" btn-group">
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr data-item-id="1">
                    <td>AA456</td>
                    <td>WEBSITE
                    </td>
                    <td><span class="badge badge-success">DIBAYAR</span> + <span class="badge badge-warning">Belum Aktif</span></td>
                    <td>
                        <div class=" btn-group">
                            <a href="#modalForm" class="modal-with-form btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr data-item-id="1">
                    <td>AA789</td>
                    <td>WEBSITE
                    </td>
                    <td><span class="badge badge-info">Selesai</span></td>
                        <td>
                            <div class=" btn-group">
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </td>
                </tr>
                <tr data-item-id="2">
                    <td>BB123</td>
                    <td>GAMBAR
                    </td>
                    <td><span class=" badge badge-info">MENUNGGU PEMBAYARAN</span></td>
                        <td>
                            <div class=" btn-group">
                                <a href="#modalForm" class="modal-with-form btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </td>
                </tr>
                <tr data-item-id="3">
                    <td>CC123</td>
                    <td>VIDEO
                    </td>
                    <td><span class=" badge badge-danger">MELEWATI BATAS WAKTU PEMBAYARAN</span></td>
                        <td>
                            <div class=" btn-group">
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<div id="modalForm" class="modal-block modal-block-primary mfp-hide">
    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Registration Form</h2>
        </header>
        <div class="card-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6 mb-3 mb-lg-0">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>
            </form>
        </div>
        <footer class="card-footer">
            <div class="row">
                <div class="col-md-12 text-end">
                    <button class="btn btn-primary modal-confirm">Submit</button>
                    <button class="btn btn-default modal-dismiss">Cancel</button>
                </div>
            </div>
        </footer>
    </section>
</div>

<!-- end: page -->
@endsection