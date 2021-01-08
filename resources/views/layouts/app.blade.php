<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Noticias') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="shortcut icon" href="{{asset('img/ROBOTITUSLOGO.png')}}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">
	<link rel="stylesheet" href="{{asset('css/mediaqueries.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-lg-5 py-2">
			<a class="navbar-brand d-flex pl-xl-5 " href="{{asset('home')}}">
                <img src="{{asset('img/fisica.gif')}}" alt="" style="width: 6vw;">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo01" class="pr-5">
				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="{{route('notas')}}">Noticias <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="{{route('comentarios')}}">Comentarios <span class="sr-only">(current)</span></a>
					</li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if(Auth::user()->admin)
                                <a class="dropdown-item"href="{{route('admintareas.index')}}">Admin</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
				</ul>
			</div>
		</nav>
	</header>
    
    @yield('content')

    <footer>

        <section class="final">
        <div class="row">
                    <div class="col news"style="text-align: center;">
                        <p>Politicas:</p>
                        <a href=""><p>Poiticas de Privacidad</p></a>
                        <a href=""><p>Terminos y Condiciones</p></a>
                        <a href=""><p>Contacto</p></a>
                        <a href=""><p>Preguntas Frecuentes</p></a>	      		
                    </div>
                    <div class="col news">
                        <p>Newsletter</p>
                        <input type="email" placeholder="Ingrese su correo" class="control">
                        <input type="submit" class="boton" value="Enviar">
                    </div>
        </div>
        </section>
    </footer>
</body>

</html>
