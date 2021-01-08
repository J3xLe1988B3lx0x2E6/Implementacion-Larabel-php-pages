@extends('layouts.admin')
@section('content')

<main class="container pb-5 mb-5">
	<!-- Title -->
	<div class="home-title row">
		<div class="home-title_text pl-3 mr-5">
			<h1 class="mt-4 mt-sm-5 text-purple ">{{$tarea->title}}</h1>
		</div>
	</div>
	<hr>
	<!-- Tarea -->
	<div class="cursos-index cursoadmin-index mt-4">
		<!-- Card 1 -->
		<div class="col mb-4">
			<div class="card h-100 bg-yellow p-3 p-xl-4">
				<img src="{{asset("tareas/$tarea->file")}}" class="mr-3 foto" alt="...">
				<div class="home-cursos_titulo">
					<h2 class="card-title pt-1 pl-2">{{$tarea->title}}</h2>
					<h3 class="pl-2">{{$tarea->date}}</h3>
				</div>
				<hr>
				<p class="card-text">{{$tarea->description}}</p>
				<div class="cursoadmin-index_botones d-flex">
					<a class="bg-lpurple mr-md-3" href="{{route('admintareas.show',$tarea->id)}}">Ver</a>
					<a class="bg-lpurple mr-md-3" href="{{route('admintareas.edit',$tarea->id)}}">Editar</a>
					<form action="{{route('admintareas.destroy',$tarea->id)}}" method="POST">
						@method('DELETE')
						@csrf
					<input type="submit" class="eliminar bg-danger mr-md-3" href="" value="Eliminar">
					</form>
			</div>
		</div>
	</div>
	
</main>

@endsection