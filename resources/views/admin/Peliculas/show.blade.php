@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
   
@stop

@section('content')

<div class="card">
    <div class="card-body">  
        <div>
         <a class="btn btn-danger float-right" href="{{route('admin.Peliculas.index')}}"><h2>x</h2></a>
         </div>
        <br>
    <h2 class="text-center">Detalle de  {{ $pelicula->nombre }}</h2>
    <br>
    <div class="media">
    <img width="250" height="300" src="{{Storage::url($pelicula->image->url)}}" class="mr-3" alt="...">
    <div class="media-body">
    <h5>  Sinopsis: {{$pelicula->sinopsis}}</h5>
                 <h5>  Director: {{$pelicula->director}}</h5>
                  <h5> Reparto: {{$pelicula->reparto}}</h5> 
                  <h5> Duracion: {{$pelicula->duracion}}</h5>
                  <h5> Genero: {{$pelicula->genero->nombre}}</h5>
                  <h5> Clasificacion: {{$pelicula->clasificacion->nombre}}</p>
         </div>
    </div>
    <br>
    <div class="text-center bg-black">
    <iframe class="text-center" width="1025" height="450" src="{{$pelicula->trailer_url}}" title="YouTube video player"></iframe> 
    </div>
        
       
    </div>
</div>

@stop
