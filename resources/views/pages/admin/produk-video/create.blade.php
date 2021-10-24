@extends('layouts.users.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
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
            <form action="{{ route('produk-video.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="packages_id"><strong>Jenis Paket</strong></label>
                    <select name="packages_id" required class="form-control">
                        <option value="">--- Pilih Paket ---</option>
                        @foreach ($packages as $p)
                        <option value="{{ $p->id }}">
                            {{ $p->nama_paket }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama"><strong>Nama</strong></label>
                    <input type="text" name="nama" class="form-control" placeholder="" value="{{ old('nama') }}"
                        required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="harga"><strong>Harga</strong></label>
                    <input type="number" name="harga" class="form-control" placeholder="" value="{{ old('harga') }}"
                        required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="deskripsi"><strong>Deskripsi</strong></label>
                    <textarea type="text" name="deskripsi" id="deskripsi" class="form-control"
                        placeholder="Input deskripsi carousel" required
                        autocomplete="off">{{ old('deskripsi') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="thumbnail"><strong>Upload thumbnail:</strong> <i>(jpeg,png,jpg,svg)</i></label>
                    <input class="form-control-file" type="file" accept="image/*" name="thumbnail" id="thumbnail"
                        required>
                </div>

                <div class="website" id="website">
                    <label for="link"><strong>Link</strong></label>
                    <div class="form-group row">
                        <div class="col-sm-4">
                        <input type="text" name="Dlink" class="form-control" placeholder="VbmDmggxauE" value="http://www.youtube.com/watch?v="
                            required autocomplete="off" readonly="readonly">
                        </div>
                        <div class="col-sm-8">
                            <input type="text" name="link" class="form-control" placeholder="VbmDmggxauE (Kode Terakhir dari URL video)" value="{{ old('link') }}"
                            required autocomplete="off">
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan Data
                </button>
            </form>
        </div>
    </div>

</div>
@endsection