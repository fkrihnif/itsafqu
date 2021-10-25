@extends('layouts.users.main')

@section('container')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manajemen Produk Web</h1>
    <a href="{{ route('produk-web.create') }}" class="btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Produk Web
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
                            <th>Recommended?</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @forelse ($webs as $w)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $w->packages['nama_paket'] }}</td>
                            <td>{{ $w->nama }}</td>
                            <td>{{ $w->harga }}</td>
                            <td><img src="{{ Storage::url($w->thumbnail) }}" alt="{{ $w->nama }}"
                                    width="100px" class="img-thumbnail"></td>
                            <td>
                            @if ($w->is_recommended == 'NO')
                                <a href="actioneditweb/{{ $w->id }}" type="submit" onclick="return confirm('Yakin ingin mengubah menjadi Recommended?');" class="btn btn-warning btn-sm">NO</a>
                            @else
                            <a href="actionedittweb/{{ $w->id }}" type="submit" onclick="return confirm('Yakin ingin mengubah menjadi tidak Recommended?');" class="btn btn-success btn-sm">YES</a>
                            @endif
                            </td>
                            <td>
                                <a href="{{ route('produk-web.edit', $w->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('produk-web.destroy', $w->id) }}" method="POST"
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