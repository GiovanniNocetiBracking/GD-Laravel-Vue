@extends('layouts.app')

@section('content')

<div class="limiter">
		<div class="container-login100" style="background-image: url('assetsAuth/images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
                <h1 class="text-center text-white mb-4" >Recuperar contraseña</h1>
				<form class="login100-form" method="POST" action="{{ route('password.update') }}" >
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
					
					<div class="wrap-input100 validate-input m-b-10 mt-4" data-validate = "Username is required">
                        
                        <input class="input100 @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus  >
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
                        
                        <input class="input100  @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="new-password" >
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

                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                        
                        <input class="input100" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
                        </span>  
                                              
                    </div>
                    		
                    <div class="container-login100-form-btn p-t-10">
                        
                        <button class="login100-form-btn" type="submit">
							Enviar
						</button>
                        
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection
