@extends('layouts.admin')
@section('content')

<main class="container main-crear-curso text-md-center">
		<!-- Title -->
		<h1 class="mt-4 mt-sm-5 text-purple mb-xl-4">Crear tarea</h1>
		<div class="mt-md-4 mt-4">
			<form class="mx-md-auto" action="{{route('admintareas.update',$tarea->id)}}" method="POST" enctype="multipart/form-data">
				@method('PATCH')
				@csrf
				<label class="d-block text-left">Titulo noticia</label>
				<input class="d-block" type="text" name="title" placeholder="Título" value="{{$tarea->title}}">
				<label class="d-block text-left">Descripcion noticia</label>
				<textarea name="description" rows="2" cols="50" placeholder="Descripción">
					{{$tarea->description}}
				</textarea>
				<label class="d-block text-left">Texto noticia</label>
				<textarea name="new" rows="2" cols="50" placeholder="Noticia">
					{{$tarea->new}}
				</textarea>
				<label class="d-block text-left">Fecha de Entrega</label>
				<input type="date" name="date" value="{{$tarea->date}}">
				@if(!$tarea->file==NULL)
				<label for="file" class="d-block text-left">Archivo Actual</label>
				<img src="{{asset("/tareas/$tarea->file")}}" class="mr-3 foto" alt="...">
				<label for="file" class="d-block text-left">Modificar Archivo</label>
				<input type="file" name="file" enctype>
				@else
				<label for="file" class="d-block text-left">Archivo Opcional</label>
				<input type="file" name="file" enctype>
				@endif
				<input type="submit" value="Actualizar" id="submit" class="btn btn-primary bg-yellow text-dark">

			</form>
		</div>
	</main>

@endsection