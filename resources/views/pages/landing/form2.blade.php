@extends('layouts.landing.main2')

@section('container')

		<div role="main" class="main">
			<div class="container py-5 mt-4 mb-3">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<section class="card form-wizard" id="w4">
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
									</ul>
								</div>

								<form class="form-horizontal p-3" novalidate="novalidate">
									<div class="tab-content">
										<div id="w4-account" class="tab-pane active">
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label" for="w4-namaLengkap">Nama Lengkap</label>
													<input type="text" class="form-control" id="validationCustom01"
														value="" placeholder="" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label" for="w4-namaLengkap">Nama
														Panggilan</label>
													<input type="text" class="form-control" id="validationCustom01"
														value="" placeholder="" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label" for="w4-namaLengkap">Nama Ayah</label>
													<input type="text" class="form-control" id="validationCustom01"
														value="" placeholder="" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label" for="w4-namaLengkap">Nama Ibu</label>
													<input type="text" class="form-control" id="validationCustom01"
														value="" placeholder="" required>
												</div>
											</div>
										</div>
										<div id="w4-profile" class="tab-pane">
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label" for="w4-namaLengkap">Nama Lengkap</label>
													<input type="text" class="form-control" id="validationCustom01"
														value="" placeholder="" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label" for="w4-namaLengkap">Nama
														Panggilan</label>
													<input type="text" class="form-control" id="validationCustom01"
														value="" placeholder="" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label" for="w4-namaLengkap">Nama Ayah</label>
													<input type="text" class="form-control" id="validationCustom01"
														value="" placeholder="" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label" for="w4-namaLengkap">Nama Ibu</label>
													<input type="text" class="form-control" id="validationCustom01"
														value="" placeholder="" required>
												</div>
											</div>
										</div>
										<div id="w4-billing" class="tab-pane">
											<div class="form-gorup row pb-3">
												<div class="col-lg-6">
													<label class="form-label">Tanggal</label>
													<input type="date" class="form-control" id="validationCustom01"
														value="" required>
												</div>
												<div class="col-lg-6">
													<label class="form-label">Waktu / Jam</label>
													<input type="text" class="form-control" id="validationCustom01"
														value="" placeholder="Contoh: 10.00 pagi" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label">Tempat/Lokasi</label>
													<input type="text" class="form-control" id="validationCustom01"
														value="" placeholder="Contoh: Kediaman Mempelai Wanita"
														required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label">Alamat</label>
													<textarea value="" placeholder="Contoh: Jalan Ahmad Yani ....."
														rows="3" class="form-control text-3 h-auto py-2" name="message"
														required id="validationCustom01"></textarea>
												</div>
											</div>
										</div>
										<div id="w4-confirm" class="tab-pane">
											<div class="form-gorup row pb-3">
												<div class="col-lg-6">
													<label class="form-label">Tanggal</label>
													<input type="date" class="form-control" id="validationCustom01"
														value="" required>
												</div>
												<div class="col-lg-6">
													<label class="form-label">Waktu / Jam</label>
													<input type="text" class="form-control" id="validationCustom01"
														value="" placeholder="Contoh: 10.00 pagi" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label">Tempat/Lokasi</label>
													<input type="text" class="form-control" id="validationCustom01"
														value="" placeholder="Contoh: Kediaman Mempelai Wanita"
														required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label">Alamat</label>
													<textarea value="" placeholder="Contoh: Jalan Ahmad Yani ....."
														rows="3" class="form-control text-3 h-auto py-2" name="message"
														required id="validationCustom01"></textarea>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-12">
													<label class="form-label">Link Google Map</label>
													<input type="text" class="form-control" id="validationCustom01"
														value="" placeholder="" required>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="card-footer">
								<ul class="pager">
									<li class="previous disabled">
										<a><i class="fas fa-angle-left"></i> Previous</a>
									</li>
									<li class="finish hidden float-end">
										<a>Finish</a>
									</li>
									<li class="next">
										<a>Next <i class="fas fa-angle-right"></i></a>
									</li>
								</ul>
							</div>
						</section>
					</div>
				</div>
			</div>

		</div>
		<footer id="footer"
			class="bg-color-dark-scale-5 border border-end-0 border-start-0 border-bottom-0 border-color-light-3 mt-0">
			<div class="container text-center my-3 py-5">
				<a href="#" class="goto-top">
					<img src="img/lazy.png" data-plugin-lazyload data-plugin-options="{'threshold': 500}"
						data-original="img/logo-light.png" width="102" height="45" class="mb-4 appear-animation"
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