@extends('layouts.users.main')

@section('container')

<!-- start: page -->
<section class="card">
    <header class="card-header">
        <div class="card-actions">
            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
        </div>
        <h2 class="card-title">Semua Pesanan</h2>
    </header>
    <div class="card-body">
        @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <table class="table table-bordered table-striped mb-0" id="datatable-default">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KODE PESANAN</th>
                    <th>PEMESAN</th>
                    <th>JENIS PESANAN</th>
                    <th>STATUS</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 1;  
                ?>
                @forelse ($orders as $order)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $order->kode_pesanan }}</td>
                    <td>{{ $order->user['name'] }}</td>
                    <td>
                        <?php                  
                            $cek = $order->kode_pesanan;
                            $cek_type = mb_substr($cek, 0, 1);    
                        ?>
                        @if ($cek_type == 'G')
                            Gambar
                        @elseif($cek_type == 'V')
                            Video
                        @elseif($cek_type == 'W')
                            Website
                        @endif
                    </td>
                    <td>
                        @if ($order->status == 'Menunggu Pembayaran')
                        <span class="badge badge-info">{{ $order->status }}</span> 
                        @elseif ($order->status == 'Dibayar')
                        <span class="badge badge-success">{{ $order->status }}</span>  + <span class="badge badge-success">{{ $order->is_aktif }}</span></td>
                        @elseif ($order->status == 'Selesai')
                        <span class="badge badge-info">{{ $order->status }}</span>
                        @elseif ($order->status == 'Melewati Batas Waktu Pembayaran')
                        <span class="badge badge-danger">{{ $order->status }}</span>
                        @endif
                    <td>
                        <a href="" class="btn btn-info">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ route('order.edit', $order->id) }}" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <button class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                        
                    </td>
                </tr>
                @empty
                    Zonkkkkkkk h3h3h3
                @endforelse
            </tbody>
        </table>
    </div>
</section>

<!-- end: page -->
@endsection