@extends('layouts.users.main')

@section('container')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manajemen Produk Video</h1>
    <a href="{{ route('produk-video.create') }}" class="btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Produk Video
    </a>
</div>

<div class="row">
    <div class="col">
        <section class="card">
            <div class="card-body">
                @if(session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('status')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true" aria-label="Close"></button>
                </div>
                @endif
                
                <table class="table table-bordered table-striped mb-0" id="datatable-default">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Paket</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Thumbnail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @forelse ($videos as $video)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $video->packages['nama_paket'] }}</td>
                            <td>{{ $video->nama }}</td>
                            <td>{{ $video->harga }}</td>
                            <td><img src="{{ Storage::url($video->thumbnail) }}" alt="{{ $video->nama }}"
                                    width="100px" class="img-thumbnail"></td>
                            <td>
                                <a href="{{ route('produk-video.edit', $video->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('produk-video.destroy', $video->id) }}" method="POST"
                                    class="d-inline" onclick="return confirm('Yakin ingin menghapus?');">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>

<!-- end: page -->
@endsection