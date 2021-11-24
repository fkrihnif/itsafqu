@extends('layouts.landing.main2')

@section('container')

		<div role="main" class="main">
			<div class="container py-5 mt-4 mb-3">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<section class="card form-wizard" id="w4">
							<form action="/order/store/{{ $id_kode }}" method="POST" class="form-horizontal p-3" novalidate="novalidate" enctype="multipart/form-data">
								@csrf
							<header class="card-header">
								<h2 class="card-title">Isi data dulu yaa kak...</h2>
							</header>
							<div class="card-body">
								<div class="wizard-progress wizard-progress-lg">
									<div class="steps-progress">
										<div class="progress-indicator"></div>
									</div>
									<ul class="nav wizard-steps">
										<li class="nav-item active">
											<a class="nav-link" href="#w4-account"
												data-bs-toggle="tab"><span>1</span>Informasi Mempelai Pria</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#w4-profile"
												data-bs-toggle="tab"><span>2</span>Informasi Mempelai Wanita</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#w4-billing"
												data-bs-toggle="tab"><span>3</span>Akad</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#w4-confirm"
												data-bs-toggle="tab"><span>4</span>Resepsi</a>
										</li>
										@if ($cek_type == 'W')
										@if ($package != 1)
										<li class="nav-item">
											<a class="nav-link" href="#w4-story"
												data-bs-toggle="tab"><span>5</span>Cerita Cinta</a>
										</li>
										@endif	
										@endif
									</ul>
								</div>
									<div class="tab-content">
										<div id="w4-account" class="tab-pane active">
											<div class="form-group row">
												<input type="hidden" name="users_id" value="{{Auth::user()->id}}">
												<div class="col-lg-12">
													<label class="form-label" for="w4-namaLengkap">Nama Lengkap</label>
													<input type="text" class="form-control" id="validationCustom01" name="nama_lengkap_pria"
														value="{{ old('nama_lengkap_pria') }}" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label" for="w4-namaLengkap">Nama
														Panggilan</label>
													<input type="text" class="form-control" id="validationCustom01"
													name="nama_panggilan_pria"
													value="{{ old('nama_panggilan_pria') }}" required>
												</div>
											</div>
											@if ($cek_type == 'W')
											@if ($package != 1)
											<div class="form-group row">
												<div class="col-lg-12">
												<label class="form-label" for="w4-namaLengkap">Foto Mempelai Pria</label>
												<input type="file" accept="image/*" onchange="loadFile(event)" class="form-control" name="foto_laki">
												<img id="output" width="100" height="100" />
											</div>
											</div>
											@endif
										@endif
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label" for="w4-namaLengkap">Nama Ayah</label>
													<input type="text" class="form-control" id="validationCustom01"
													name="ayah_pria"
													value="{{ old('ayah_pria') }}" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label" for="w4-namaLengkap">Nama Ibu</label>
													<input type="text" class="form-control" id="validationCustom01"
													name="ibu_pria"
													value="{{ old('ibu_pria') }}"  required>
												</div>
											</div>
							
										</div>
										<div id="w4-profile" class="tab-pane">
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label" for="w4-namaLengkap">Nama Lengkap</label>
													<input type="text" class="form-control" id="validationCustom01"
													name="nama_lengkap_pr"
													value="{{ old('nama_lengkap_pr') }}" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label" for="w4-namaLengkap">Nama
														Panggilan</label>
													<input type="text" class="form-control" id="validationCustom01"
													name="nama_panggilan_pr"
													value="{{ old('nama_panggilan_pr') }}"required>
												</div>
											</div>
											@if ($cek_type == 'W')
											@if ($package != 1)
											<div class="form-group row">
												<div class="col-lg-12">
												<label class="form-label" for="w4-namaLengkap">Foto Mempelai Wanita</label>
												<input type="file" accept="image/*" onchange="loadFile(event)" class="form-control" name="foto_pr">
												<img id="output" width="100" height="100" />
											</div>
											</div>
											@endif
										@endif
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label" for="w4-namaLengkap">Nama Ayah</label>
													<input type="text" class="form-control" id="validationCustom01"
													name="ayah_pr"
													value="{{ old('ayah_pr') }}" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label" for="w4-namaLengkap">Nama Ibu</label>
													<input type="text" class="form-control" id="validationCustom01"
													name="ibu_pr"
													value="{{ old('ibu_pr') }}"required>
												</div>
											</div>
										</div>
										<div id="w4-billing" class="tab-pane">
											<div class="form-gorup row pb-3">
												<div class="col-lg-6">
													<label class="form-label">Tanggal</label>
													<input type="date" class="form-control" id="validationCustom01"
													name="tanggal_akad"
													value="{{ old('tanggal_akad') }}" required>
												</div>
												<div class="col-lg-6">
													<label class="form-label">Waktu / Jam</label>
													<input type="text" class="form-control" id="validationCustom01"
													name="jam_akad"
													value="{{ old('jam_akad') }}" placeholder="Contoh: 10.00 pagi" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label">Tempat/Lokasi</label>
													<input type="text" class="form-control" id="validationCustom01"
													name="tempat_akad"
													value="{{ old('tempat_akad') }}" placeholder="Contoh: Kediaman Mempelai Wanita"
														required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label">Alamat</label>
													<textarea value="" placeholder="Contoh: Jalan Ahmad Yani ....."
														rows="3" class="form-control text-3 h-auto py-2" name="alamat_akad"
														value="{{ old('alamat_akad') }}"
														required id="validationCustom01"></textarea>
												</div>
											</div>
										</div>
										<div id="w4-confirm" class="tab-pane">
											<div class="form-gorup row pb-3">
												<div class="col-lg-6">
													<label class="form-label">Tanggal</label>
													<input type="date" class="form-control" id="validationCustom01"
													name="tanggal_resepsi"
													value="{{ old('tanggal_resepsi') }}" required>
												</div>
												<div class="col-lg-6">
													<label class="form-label">Waktu / Jam</label>
													<input type="text" class="form-control" id="validationCustom01"
													name="jam_resepsi"
													value="{{ old('jam_resepsi') }}" placeholder="Contoh: 13.00 Siang" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label">Tempat/Lokasi</label>
													<input type="text" class="form-control" id="validationCustom01"
													name="tempat_resepsi"
													value="{{ old('tempat_resepsi') }}" placeholder="Contoh: Gedung Serbaguna Mujahidin"
														required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label">Alamat</label>
													<textarea 	name="alamat_resepsi"
													value="{{ old('alamat_resepsi') }}" placeholder="Contoh: Jalan Ahmad Yani ....."
														rows="3" class="form-control text-3 h-auto py-2" name="message"
														required id="validationCustom01"></textarea>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label">Link Google Map</label>
													<input type="text" 	name="link_map"
													value="{{ old('link_map') }}" class="form-control" id="validationCustom01"
													required>
												</div>
											</div>
											@if ($cek_type == 'W')
											@if ($package == 1)
											<div class="row mt-3">
												<button type="submit" class="btn btn-primary btn-block" style="height: 40px;">
													Simpan dan Lanjut
												</button>
											</div>
											@endif
											@endif
								
										</div>
										@if ($cek_type == 'W')
										@if ($package != 1)
										<div id="w4-story" class="tab-pane">
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label">Tanggal</label>
													<input type="text" class="form-control" id="validationCustom01"
													name="addmore[0][tanggal]"
													value="{{ old('tanggal') }}" placeholder="Contoh: 30 September 2021"
														required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label">Judul</label>
													<input type="text" 	name="addmore[0][judul]"
													value="{{ old('judul') }}" class="form-control" id="validationCustom01" placeholder="Contoh: Ta'aruf"
													required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label">Isi Cerita</label>
													<textarea 	name="addmore[0][cerita]"
													value="{{ old('cerita') }}" placeholder="Contoh: Saat itu kami ..."
														rows="3" class="form-control text-3 h-auto py-2"
														required id="validationCustom01"></textarea>
												</div>
											</div>
											<div>
												<button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Subject</button>
											</div>
											<div class="row mt-3">
												<button type="submit" class="btn btn-primary btn-block" style="height: 40px;">
													Simpan dan Lanjut
												</button>
											</div>
										</div>
										@endif
										@endif
									</div>
								
							</div>
							<div class="card-footer">
								<ul class="pager">
									<li class="previous disabled">
										<a><i class="fas fa-angle-left"></i> Previous</a>
									</li>
									<li class="hidden float-end">
									
									</li>
									<li class="next">
										<a>Next <i class="fas fa-angle-right"></i></a>
									</li>
								</ul>
							</div>
							</form>
						</section>
					</div>
				</div>
			</div>

		</div>
		<footer id="footer"
			class="bg-color-dark-scale-5 border border-end-0 border-start-0 border-bottom-0 border-color-light-3 mt-0">
			<div class="container text-center my-3 py-5">
				<a href="#" class="goto-top">
					<img src="{{ asset('user/img/logoputih.png')}}" data-plugin-lazyload data-plugin-options="{'threshold': 500}"
						data-original="{{ asset('user/img/logoputih.png')}}" width="102" height="45" class="mb-4 appear-animation"
						alt="Porto" data-appear-animation="fadeIn" data-appear-animation-delay="300">
				</a>
				<p class="font-weight-500 text-4 ls-0 mb-4">Solusi Undangan Digital Anda
				</p>
				<ul class="social-icons social-icons-big social-icons-dark-2">
					<li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank"
							title="Instagram"><i class="fab fa-instagram"></i></a></li>
					<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
							title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
					<li class="social-icons-youtube"><a href="http://www.youtube.com/" target="_blank"
							title="Youtube"><i class="fab fa-youtube"></i></a></li>
				</ul>
			</div>
			<div class="copyright bg-color-dark-scale-4 py-4">
				<div class="container text-center py-2">
					<p class="mb-0 text-2 ls-0">Copyright 2014 - 2021 Porto - All Rights Reserved</p>
				</div>
			</div>
		</footer>
@endsection