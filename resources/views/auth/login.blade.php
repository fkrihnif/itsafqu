@extends('layouts.mainMasuk')

@section('container')
<a href="/" class="logo float-left">
	<img src="{{ asset('user/img/logo2baru.png') }}" height="70" alt="Porto Admin" />
</a>
<div class="panel card-sign">
	<div class="card-title-sign mt-3 text-end">
		<h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Login</h2>
	</div>
	<div class="card-body">

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group mb-3">
				<label>Username</label>
				<div class="input-group">
                    <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					<span class="input-group-text">
						<i class="bx bx-user text-4"></i>
					</span>
				</div>
			</div>

            	<div class="form-group mb-3">
				      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
				<div class="input-group">
				    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					<span class="input-group-text">
						<i class="bx bx-lock text-4"></i>
					</span>
				</div>
			</div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
				<span class="mt-3 mb-3 line-thru text-center text-uppercase">
				<span>or</span>
			</span>

			<div class="mb-1 text-center">
				<a class="btn btn-facebook mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>
				<a class="btn btn-danger mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-google"></i></a>
			</div>

			<p class="text-center">Don't have an account yet? <a href="/Register">Register!</a></p>
			<p class="text-center"><a href="/">Kembali ke ITSAFQU</a></p>
        </form>
	</div>
</div>
@endsection
