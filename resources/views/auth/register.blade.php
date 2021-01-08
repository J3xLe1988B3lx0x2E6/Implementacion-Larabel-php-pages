@extends('layouts.app')

@section('content')
<body class="body-welcome p-3 center">
	<div class="welcome-foto welcome-foto_register mx-auto mt-3 mt-md-5 mt-lg-3" style="margin-bottom: 3vw;;">
    <img src="{{asset('img/robotitus.png')}}" alt="" style="width: 100%">
	</div>
	<h2 class="text-center mt-5 mt-lg-4">Regístrate aquí</h2>
	<form class="container d-flex mt-3 mt-md-3" method="POST" action="{{route('register')}}">
	@csrf
    	<!-- Name -->
        <input id="name" placeholder="Nombre Completo" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
		<!-- Email -->
        <input id="email" placeholder="E-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
		<!-- Contraseña -->
        <input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

		<!-- Confirmar contraseña -->
        <input id="password-confirm" placeholder="Confirmar contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

		<a href="{{url('/')}}" class="text-right text-purple form-label-link mt-2">¿Ya tienes cuenta? Inicia sesión</a>
		<input id="submit" value="Registrarme" type="submit" class="btn btn-secondary mb-4 mx-auto mt-3 mt-md-4" >
	</form>
</body>
@endsection




