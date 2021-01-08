@extends('layouts.admin')
@section('content')
<main class="container main-crear-curso text-md-center">
		<!-- Title -->
		<h1 class="mt-4 mt-sm-5 text-purple mb-xl-4">Crear noticia</h1>
		<div class="mt-md-4 mt-4">
			<form class="mx-md-auto" action="{{route('admintareas.store')}}"method="POST" enctype="multipart/form-data">
				@csrf
				<input class="d-block" type="text" name="title" placeholder="Título">
				<textarea name="description" rows="2" cols="50" placeholder="Descripción"></textarea>
				<textarea name="new" rows="4" cols="50" placeholder="Noticia."></textarea>
				<label class="d-block text-left">Fecha de Publicación</label>
				<input type="date" name="date" value="2020-04-13">
				<label for="file" class="d-block text-left">Seleccione imagen.</label>
				<input type="file" name="file" enctype>
				<input type="submit" value="Crear" id="submit" class="btn btn-primary bg-yellow text-dark">
			</form>
		</div>
	</main>

@endsection