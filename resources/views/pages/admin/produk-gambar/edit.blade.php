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
            <form action="{{ route('produk-gambar.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="packages_id"><strong>Jenis Paket</strong></label>
                    <select name="packages_id" required class="form-control">
                        <option value="{{ $item->packages_id }}">{{ $item->packages['nama_paket'] }}</option>
                        @foreach ($packages as $p)
                        <option value="{{ $p->id }}">
                            {{ $p->nama_paket }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama"><strong>Nama</strong></label>
                    <input type="text" name="nama" class="form-control" placeholder=""
                        value="{{ $item->nama }}" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="harga"><strong>Harga</strong></label>
                    <input type="number" name="harga" class="form-control" placeholder=""
                        value="{{ $item->harga }}" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="deskripsi"><strong>Deskripsi</strong></label>
                    <textarea type="text" name="deskripsi" id="deskripsi" class="form-control"
                        placeholder="Input deskripsi carousel" required
                        autocomplete="off">{{ $item->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="thumbnail"><strong>Upload thumbnail:</strong> <i>(jpeg,png,jpg,svg)</i></label>
                    <input class="form-control-file" type="file" name="thumbnail" id="thumbnail"
                     >
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