@extends('layouts.users.main')

@section('container')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manajemen Produk</h1>
    <a href="{{ route('produk.create') }}" class="btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Produk
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
                            <th>Jenis</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Thumbnail</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @forelse ($templates as $t)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $t->invitation_type['jenis_undangan'] }}</td>
                            <td>{{ $t->nama }}</td>
                            <td>{{ $t->harga }}</td>
                            <td><img src="{{ Storage::url($t->thumbnail) }}" alt="{{ $t->nama }}"
                                    width="200px" class="img-thumbnail"></td>
                            <td>
                                <a href="" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <a href="" class="btn btn-info">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <form action="" method="POST"
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
                        <tr>
                            <td colspan="4" class="text-center">
                                Tidak Ada Data
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>

<!-- end: page -->
@endsection