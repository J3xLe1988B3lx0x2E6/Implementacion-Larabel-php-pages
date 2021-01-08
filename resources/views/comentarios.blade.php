@extends('layouts.app')
@section('content')

<section class="entregas mt-5">
		<h1>Tus comentarios</h1>
		<table class="table table-hover ml-4 mt-4">
			<thead class="bg-lpurple">
				<tr>
					<th scope="col">Usuario</th>
					<th scope="col">Noticia</th>
					<th scope="col">Comentario</th>

				</tr>
			</thead>
			<tbody>
				@foreach($entregas as $entregas)
				@if($entregas->user_id==Auth::user()->id)
				<tr>
					<td>{{$entregas->user->name}}</td>
					<td><a href="{{route('cal', $entregas->tarea_id)}}">ver noticia
                    </a></td>
                    <td>
                        <p name="comments" id="">{{$entregas->comments}}</p>
                    </td>


					</form>
				</tr>
				@endif
                @endforeach
			</tbody>
		</table>
	</section>

@endsection