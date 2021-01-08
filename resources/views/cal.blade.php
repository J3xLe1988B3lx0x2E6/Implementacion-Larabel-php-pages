@extends('layouts.admin')
@section('content')

<main class="container">
	<main class="container perfil main-crear-curso text-md-center">
		<!-- Title -->
		<h1 class="display-1">{{$tarea->title}}</h1>
		<h2>Noticia</h2>
		<hr>
		<div class="mt-md-4 mt-4">
			<img src="{{asset("tareas/$tarea->file")}}" class="rounded mx-auto d-block imagen" alt="...">
		</div>
		<div class="mt-md-4 mt-4">
			<h2 class="text-justify">{{$tarea->description}}</h2>
			<p class="text-justify">{{$tarea->new}}</p>
		</div>
		<footer>
			<h6 class="text-right">Autor: <a href="{{ route('creadores') }}">{{$tarea->name}}</a></h6>
		</footer>
			<section class="entregas mt-15">
			<h1 align="center">Comentarios</h1>
			<table class="table table-hover ml-5 mt-15">
				<tbody>
					<tr>
						<th scope="row">1</th>
						<form class="mx-md-auto" action="{{route('entregas.store')}}"method="POST" enctype="multipart/form-data">
							@csrf

							<td>
							<input type="text" class="d-none" name="tarea_id" value="{{$tarea->id}}">
							</td>
							<td>
							<textarea name="comments" rows="2" cols="50" placeholder="Descripción"></textarea>
							</td>
							<td>
								<input type="submit" value="Comentar" id="submit" class="bg-success">
							</td>

						</form>
					</tr>
				</tbody>
			</table>
		</section>
	</main>
	<section class="entregas mt-5">
		<h1>Comentarios</h1>
		<table class="table table-hover ml-4 mt-4">
			<thead class="bg-lpurple">
				<tr>
					<th scope="col">Usuario</th>
					<th scope="col">Comentario</th>
				</tr>
			</thead>
			<tbody>
				@foreach($entregas as $entregas)
				@if($entregas->tarea_id==$tarea->id)
				<tr>
					<td>{{$entregas->user->name}}</td>
						<td>
							<p>{{$entregas->comments}}</p>
						</td>
					</form>
				</tr>
				@endif
				@endforeach
			</tbody>
		</table>
	</section>
	<h>
</main>

@endsection


