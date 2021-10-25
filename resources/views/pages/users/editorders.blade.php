@extends('layouts.users.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Pesanan</h1>
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
    

    <form action="{{ route('pesanan-ku.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
<div class="row">

    <div class="col-lg-6">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    </div>

                    <h2 class="card-title">Data Pengantin Pria</h2>
                </header>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-form-label" for="nama_lengkap_pria">Nama Lengkap Pengantin Pria</label>
                                <input type="text" class="form-control" name="nama_lengkap_pria" value="{{ $item->nama_lengkap_pria }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-form-label" for="nama_panggila_pria">Nama Panggilan Pengantin Pria</label>
                                <input type="text" class="form-control" name="nama_panggilan_pria" value="{{ $item->nama_panggilan_pria }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-form-label" for="ayah_pria">Nama Ayah</label>
                                <input type="text" class="form-control" name="ayah_pria" value="{{ $item->ayah_pria }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-form-label" for="ibu_pria">Nama Ibu</label>
                                <input type="text" class="form-control" name="ibu_pria" value="{{ $item->ibu_pria }}" required>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    <div class="col-lg-6">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                </div>

                <h2 class="card-title">Data Pengantin Wanita</h2>

            </header>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="col-form-label" for="nama_lengkap_pr">Nama Lengkap Pengantin Wanita</label>
                            <input type="text" class="form-control" name="nama_lengkap_pr" value="{{ $item->nama_lengkap_pr }}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="col-form-label" for="nama_panggila_pr">Nama Panggilan Pengantin Wanita</label>
                            <input type="text" class="form-control" name="nama_panggilan_pr" value="{{ $item->nama_panggilan_pr }}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="col-form-label" for="ayah_pr">Nama Ayah</label>
                            <input type="text" class="form-control" name="ayah_pr" value="{{ $item->ayah_pr }}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="col-form-label" for="ibu_pr">Nama Ibu</label>
                            <input type="text" class="form-control" name="ibu_pr" value="{{ $item->ibu_pr }}" required>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>


<div class="row mt-3">

    <div class="col-lg-6">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    </div>

                    <h2 class="card-title">Data Akad Pernikahan</h2>
                </header>

                <div class="card-body">
                    @forelse ($item->contracts as $akad)
                    <div class="form-gorup row pb-3">
                        <div class="col-lg-6">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control"  
                            name="tanggal_akad"
                            value="{{ $akad->tanggal_akad }}" required>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Waktu / Jam</label>
                            <input type="text" class="form-control"
                            name="jam_akad"
                            value="{{ $akad->jam_akad }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <label class="form-label">Tempat/Lokasi</label>
                            <input type="text" class="form-control"  
                            name="tempat_akad"
                            value="{{ $akad->tempat_akad }}" placeholder="Contoh: Kediaman Mempelai Wanita"
                                required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <label class="form-label">Alamat</label>
                            <textarea placeholder="Contoh: Jalan Ahmad Yani ....." rows="3" class="form-control text-3 h-auto py-2" name="alamat_akad"
                                required >{{ $akad->alamat_akad }}</textarea>
                        </div>
                    </div>
                    @empty
                        
                    @endforelse
                </div>
            </section>
        </div>

    <div class="col-lg-6">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                </div>

                <h2 class="card-title">Data Resepsi Pernikahan</h2>

            </header>
            <div class="card-body">
                @forelse ($item->receptions as $resepsi)
                <div class="form-gorup row pb-3">
                    <div class="col-lg-6">
                        <label class="form-label">Tanggal</label>
                        <input type="date" class="form-control"  
                        name="tanggal_resepsi"
                        value="{{ $resepsi->tanggal_resepsi }}" required>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label">Waktu / Jam</label>
                        <input type="text" class="form-control"  
                        name="jam_resepsi"
                        value="{{ $resepsi->jam_resepsi }}" placeholder="Contoh: 13.00 Siang" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12">
                        <label class="form-label">Tempat/Lokasi</label>
                        <input type="text" class="form-control"  
                        name="tempat_resepsi"
                        value="{{ $resepsi->tempat_resepsi }}" placeholder="Contoh: Gedung Serbaguna Mujahidin"
                            required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12">
                        <label class="form-label">Alamat</label>
                        <textarea 	name="alamat_resepsi"
                         placeholder="Contoh: Jalan Ahmad Yani ....."
                            rows="3" class="form-control text-3 h-auto py-2" name="message"
                            required  >{{ $resepsi->alamat_resepsi }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12">
                        <label class="form-label">Link Google Map</label>
                        <input type="text" 	name="link_map"
                        value="{{ $resepsi->link_map }}" class="form-control"  
                        required>
                    </div>
                </div>
                @empty
                    
                @endforelse
            </div>
        </section>
    </div>

</div>

    <div class="row mt-3">
            <button type="submit" class="btn btn-primary btn-block" style="height: 40px;">
                Simpan Data
            </button>
    </div>
</form>
</div>

@endsection