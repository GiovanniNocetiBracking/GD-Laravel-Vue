@extends('layouts.app')

@section('content')

<div class="limiter">
		<div class="container-login100" style="background-image: url('assetsAuth/images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form" method="POST" action="{{ route('login') }}" >
                @csrf
					<div class="login100-form-avatar">
						<img src="assetsAuth/images/lego-batman.jpg" alt="AVATAR">
					</div>

					<div class="wrap-input100 validate-input m-b-10 mt-4" data-validate = "Username is required">
						<input class="input100 @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100  @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit">
							Ingresar
						</button>
                        @if (Route::has('password.request'))
                            <div class="text-center w-full p-t-25 p-b-230">
                                <a href="{{ route('password.request') }}" class="txt1">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        @endif
					</div>			

					<div class="text-center w-full">
						<a class="txt1" href="/register">
							¿Eres nuevo? .. Registrate!
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>

                    <div class="text-center w-full">
						<a class="txt1" href="/">
							Ir al inicio
							<i class="fa fa-long-arrow-left"></i>						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection
