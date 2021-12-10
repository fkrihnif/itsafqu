@extends('layouts.users.main')

@section('container')

<!-- start: page -->
<section class="card">
    <header class="card-header">
        <div class="card-actions">
            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
        </div>

        <h2 class="card-title">Riwayat Pesanan Saya</h2>
    </header>
    <div class="card-body">
        @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('status')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true" aria-label="Close"></button>
        </div>
        @endif
        <table class="table table-bordered table-striped mb-0" id="datatable-editable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KODE PESANAN</th>
                    <th>JENIS PESANAN</th>
                    <th>HARGA</th>
                    <th>STATUS</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 1;  
                ?>
                @forelse ($order as $order)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $order->kode_pesanan }}</td>
                    <td>
                        <?php                  
                            $cek = $order->kode_pesanan;
                            $cek_type = mb_substr($cek, 0, 1);    
                        ?>
                        @if ($cek_type == 'G')
                            Gambar
                        @elseif($cek_type == 'V')
                            Video
                        @elseif($cek_type == 'W' || $cek_type == 'S' || $cek_type == 'P' || $cek_type == 'E')
                            Website
                            <br>
                            @if ($order->status != 'Expired')
                            @if ($order->url_subdomain == null || $order->url_subdomain == '')
                            <a href="{{ route('show-wedding', $order->url) }}" target="_blank"><button type="button"
                                class="btn btn-primary btn-sm mb-2">Lihat Undangan Saya</button></a>
                            @else
                            <a href="{{ route('show-wedding-paket', $order->url_subdomain) }}" target="_blank"><button type="button"
                                class="btn btn-primary btn-sm mb-2">Lihat Undangan Saya</button></a>
                            @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        @if ($cek_type == 'G')
                            @currency($order->image_template->harga)
                        @elseif($cek_type == 'V')
                            @currency($order->video_template->harga)
                        @elseif($cek_type == 'W')
                            @currency($order->web_template->harga)
                        @endif
                    </td>
                    <td>
                        @if ($order->status == 'Menunggu Pembayaran')
                        <span class="badge badge-info">{{ $order->status }}</span> 
                        @elseif ($order->status == 'Dibayar')
                        <span class="badge badge-success">{{ $order->status }}</span>  + <span class="badge badge-success">{{ $order->is_aktif }}</span></td>
                        @elseif ($order->status == 'Selesai')
                        <span class="badge badge-info">{{ $order->status }}</span>
                        @elseif ($order->status == 'Expired')
                        <span class="badge badge-danger">{{ $order->status }}</span>
                        @endif
                    <td>
                        @if ($order->status == 'Dibayar' AND $order->is_aktif == 'Belum Aktif')
                        <a href="{{ route('pesanan-ku.edit', $order->id) }}" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        @elseif ($order->status == 'Menunggu Pembayaran')
                        <a href="{{ route('pesanan-ku.edit', $order->id) }}" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        @else

                        @endif

                        @if ($order->is_aktif == 'Belum Aktif' && $order->status == 'Dibayar')            
                        @else
                     
                        {{-- <form action="{{ route('pesanan-ku.destroy', $order->id) }}" method="POST"
                            class="d-inline" onclick="return confirm('Yakin ingin menghapus?');">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form> --}}
                        @endif
                        
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">
                        Belum ada pesanan, Mau Pesan? klik <a href="#">disini!</a> 
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>

<!-- end: page -->
@endsection