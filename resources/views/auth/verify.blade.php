@extends('layouts.app')

@section('content')

<div class="limiter">
		<div class="container-login100" style="background-image: url('assetsAuth/images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
            
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nuevo link de verificacion a sido enviado a tu correo.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor verifica que te haya llegado el link de verificacion.') }}
                    {{ __('Si no recibiste el link') }},
                    <form class="login100-form" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="login100-form-btn">{{ __('click here to request another') }}</button>.
                    </form>
               
			</div>
		</div>
	</div>
@endsection
