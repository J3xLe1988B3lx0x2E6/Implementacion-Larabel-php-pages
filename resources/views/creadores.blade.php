@extends('layouts.admin')
@section('content')

<main class="container perfil main-crear-curso text-md-center">
		<!-- Title -->
		<h1 class="mt-4 mt-sm-5 text-purple mb-xl-4">Perfil de los autores</h1>
		<div class="mt-md-4 mt-4">
			<form class="mx-md-auto" action="">
			    <hr>
			    <div class="col d-flex">
 					<img src="{{asset('img/pef1.jpeg')}}" class="rounded-circle" alt="...">
				</div>
			    <div class="row row-cols-2 row-cols-md-4">
		</div>
		<div class="text-black">
			<h1>Galindo Ruiz Abraham</h1>
			<h1>Mexicano, 20 años.</h1>
			<h3 class="text-justify text-black">
				    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
			</h3>
		</div>
		<div class="mt-md-4 mt-4">
			<form class="mx-md-auto" action="">
			    <hr>
			    <div class="col d-flex">
 					<img src="{{asset('img/pef2.jpg')}}" class="rounded-circle" alt="...">
				</div>
			    <div class="row row-cols-2 row-cols-md-4">
			    </div>
			  <div class="text-black">
			<h1>Angeles Hernández Juan</h1>
			<h1>Mexicano, 21 años.</h1>
			<h3 class="text-justify text-black">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
	</main>

@endsection


