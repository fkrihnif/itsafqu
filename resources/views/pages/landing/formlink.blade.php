@extends('layouts.landing.main2')

@section('container')

		<div role="main" class="main">
			<div class="container py-5 mt-4 mb-3">
				<div class="row justify-content-center">
					<div class="col-md-8">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="/link/store/{{ $kode_pesanan }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="form-group col">
                                    <label>Nama Domain / URL Undangan</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" style="color: #2490ac"><b>www.itsafqu.com/</b></span>
                                        <input name="url" type="text" class="form-control" placeholder="fulandanfulanah" value="{{ old('url') }}" onkeyup="nospaces(this)" required>
                                    </div>
                                </div>
                                <script>
                                    function nospaces(t){
                                        if(t.value.match(/\s/g)){
                                          t.value=t.value.replace(/\s/g,'');
                                             }
                                            }
                                </script>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                <h3>Mohon diperhatikan dalam proses pengisian</h3>
                                <small class="text-muted">
                                <i class="fa fa-exclamation-circle text-info"></i>
                                Link website hanya bisa menerima huruf kecil, angka,
                                serta spasi diganti menjadi karakter <strong>-</strong> (strip)
                                </small>
                                <br>
                                <small class="text-muted">
                                <i class="fa fa-exclamation-circle text-info"></i>
                                Apabila ingin membuat website undangan sebagai contoh : <a href="https://itsafqu.com/lutfi-fulanah">https://itsafqu.com/lutfi-fulanah</a>,
                                maka yang perlu di input hanyalah <strong>lutfi-fulanah</strong>
                                saja pada kolom, tanpa perlu memasukkan
                                <strong>https://</strong> dan <strong>itsafqu</strong> nya.
                                </small>
                                </div>
                                </div>
                            <div class="row">
                                <div class="form-group col-lg-9">
                                </div>
                                <div class="form-group col-lg-3">
                                        <button type="submit" value="Submit" class="btn btn-primary btn-modern float-end">
                                            Lanjut
                                        </button>
                                </div>
                            </div>
                        </form>
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
					<p class="mb-0 text-2 ls-0">Copyright 2021 ITSAFQU- All Rights Reserved</p>
				</div>
			</div>
		</footer>
@endsection