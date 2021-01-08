@extends('layouts.admin')
@section('content')
<main>
@foreach($tareas as $tarea)
<div class="mt-md-4 mt-4">
   
    <div class="media position-relative">
        <img src="{{asset("tareas/$tarea->file")}}" class="mr-3 foto" alt="...">
        <div class="media-body">
        <h5 class="mt-0">{{$tarea->title}}</h5>
        <p>{{$tarea->description}}</p>
        <h3 class="pl-2">{{$tarea->date}}</h3>
        <a href="{{route('cal',$tarea->id)}}" class="btn btn-success card-entregar mt-5">Ir a noticia</a>
        </div>
    </div>
    
</div>
<hr>
@endforeach

</main>
@endsection