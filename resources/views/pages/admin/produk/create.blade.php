@extends('layouts.users.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Carousel</h1>
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
            <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="invitation_types_id"><strong>Jenis Produk</strong></label>
                    <select name="invitation_types_id" required class="form-control">
                        <option value="">--- Pilih Produk ---</option>
                        @foreach ($types as $type)
                        <option value="{{ $type->id }}">
                            {{ $type->jenis_undangan }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama"><strong>Nama</strong></label>
                    <input type="text" name="nama" class="form-control" placeholder=""
                        value="{{ old('nama') }}" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="harga"><strong>Harga</strong></label>
                    <input type="number" name="harga" class="form-control" placeholder=""
                        value="{{ old('harga') }}" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="deskripsi"><strong>Deskripsi</strong></label>
                    <textarea type="text" name="deskripsi" id="deskripsi" class="form-control"
                        placeholder="Input deskripsi carousel" required
                        autocomplete="off">{{ old('deskripsi') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="thumbnail"><strong>Upload thumbnail:</strong> <i>(maks: 3MB|jpeg,png,jpg,svg)</i></label>
                    <input class="form-control-file" type="file" name="thumbnail" id="thumbnail"
                     required>
                </div>
                <div class="form-group">
                    <label for="link"><strong>Link</strong></label>
                    <input type="text" name="link" class="form-control" placeholder=""
                        value="{{ old('link') }}" required autocomplete="off">
                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    Simpan Data
                </button>
            </form>
        </div>
    </div>

</div>
@endsection