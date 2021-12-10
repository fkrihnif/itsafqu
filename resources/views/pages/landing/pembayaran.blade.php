@extends('layouts.landing.main2')

@section('container')

<div role="main" class="main">
	<div class="container py-5 mt-4">
		<div class="row justify-content-center pt-4">
			<div class="col-md-8">
				<p style="text-align: center">
					<i class="icon-clock icons"></i> Selesaikan pembayaran
					sebelum tanggal <b>{{ $deadline }}</b>
				</p>
				<div class="card">
					<div class="card-body">
						<h4 style="text-align: center">Total Pembayaran</h4>
						<h2 style="text-align: center; color: #26456e">
							<strong> @currency($harga)</strong>
						</h2>
						<div class="alert alert-default" style="text-align: center">
							Kode Pesanan : {{ $kode_pesanan }}
						</div>
						<div style="text-align: center">
							<p class="mb-0">Silahkan Transfer ke :</p>
							<h4 class="mb-0"> BNI Syariah : 8880806213</h4>
							<p><b>A.N ITSAFQU</b></p>

						</div>
						<div class="alert alert-info" style="text-align: center">
							Silahkan Hubungi WhatsApp 081345025914 atau melalui <a href="https://api.whatsapp.com/send?phone=62895380000239&text=Bismillah, Saya mau konfirmasi pembayaran dengan kode pemesanan{{ $kode_pesanan }}"
							target="_blank">Link ini</a> dengan
							menyertakan kode pesanan <b>{{ $kode_pesanan }}</b> untuk
							konfirmasi pembayaran anda sekaligus aktifasi undangan anda
						</div>
					</div>
					<div class="d-sm-flex align-items-center justify-content-between mb-3 mt-4 mx-4">
						@if ($cek_type == 'W')
						@if ($cek_paket == 2 || $cek_paket == 3)
						<a href="{{ route('show-wedding-paket', $url) }}" target="_blank"><button type="button"
							class="btn btn-primary mb-2">Lihat Undangan Saya</button></a>
						@elseif ($cek_paket == 1)
						<a href="{{ route('show-wedding', $url) }}" target="_blank"><button type="button"
							class="btn btn-primary mb-2">Lihat Undangan Saya</button></a>
						@endif
						@else
						<a href="/" class="btn btn-primary mb-2">Kembali Ke Home</a>
						@endif
						<a href="/customer" class="btn btn-outline btn-primary mb-2">Lihat Dashboard Anda</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<footer id="footer"
	class="bg-color-dark-scale-5 border border-end-0 border-start-0 border-bottom-0 border-color-light-3 mt-0">
	<div class="container text-center my-3 py-5">
		<a href="#" class="goto-top">
			<img src="{{ asset('user/img/logoputih.png')}}" data-plugin-lazyload data-plugin-options="{'threshold': 500}"
				data-original="{{ asset('user/img/logoputih.png')}}" width="102" height="45" class="mb-4 appear-animation" alt="Porto"
				data-appear-animation="fadeIn" data-appear-animation-delay="300">
		</a>
		<p class="font-weight-500 text-4 ls-0 mb-4">Solusi Undangan Digital Anda
		</p>
		<ul class="social-icons social-icons-big social-icons-dark-2">
			<li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i
						class="fab fa-instagram"></i></a></li>
			<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i
						class="fab fa-facebook-f"></i></a></li>
			<li class="social-icons-youtube"><a href="http://www.youtube.com/" target="_blank" title="Youtube"><i
						class="fab fa-youtube"></i></a></li>
		</ul>
	</div>
	<div class="copyright bg-color-dark-scale-4 py-4">
		<div class="container text-center py-2">
			<p class="mb-0 text-2 ls-0">Copyright 2021 ITSAFQU- All Rights Reserved</p>
		</div>
	</div>
</footer>
@endsection