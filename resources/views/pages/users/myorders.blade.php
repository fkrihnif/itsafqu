@extends('layouts.users.main')

@section('container')

<!-- start: page -->
<section class="card">
    <header class="card-header">
        <div class="card-actions">
            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
        </div>

        <h2 class="card-title">Default</h2>
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
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
                        <a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
                <tr data-item-id="1">
                    <td>AA456</td>
                    <td>WEBSITE
                    </td>
                    <td><span class="badge badge-success">DIBAYAR</span> + <span class="badge badge-warning">Belum Aktif</span></td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
                        <a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
                <tr data-item-id="1">
                    <td>AA789</td>
                    <td>WEBSITE
                    </td>
                    <td><span class="badge badge-info">Selesai</span></td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
                        <a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
                <tr data-item-id="2">
                    <td>BB123</td>
                    <td>GAMBAR
                    </td>
                    <td><span class=" badge badge-info">MENUNGGU PEMBAYARAN</span></td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
                        <a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
                <tr data-item-id="3">
                    <td>CC123</td>
                    <td>VIDEO
                    </td>
                    <td><span class=" badge badge-danger">MELEWATI BATAS WAKTU PEMBAYARAN</span></td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
                        <a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<!-- end: page -->
@endsection