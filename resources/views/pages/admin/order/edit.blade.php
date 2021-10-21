@extends('layouts.users.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Produk-Web</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('order.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="status"><strong>Status</strong></label>
                    <select name="status" required class="form-control">
                        <option value="{{ $item->status }}">{{ $item->status }}</option>
                        <option value="Dibayar">Dibayar</option>
                        <option value="Selesai">Selesai</option>
                        <option value="Menunggu Pembayaran">Menunggu Pembayaran</option>
                        <option value="Melewati Batas Waktu Pembayaran">Melewati Batas Waktu Pembayaran</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="is_aktif"><strong>Aktif atau belum?</strong></label>
                    <select name="is_aktif" required class="form-control">
                        <option value="{{ $item->is_aktif }}">{{ $item->is_aktif }}</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Belum Aktif">Belum Aktif</option>
                    </select>
                </div>     
                <br>          

                <button type="submit" class="btn btn-primary btn-block">
                    Ubah Data
                </button>
            </form>
        </div>
    </div>

</div>
@endsection