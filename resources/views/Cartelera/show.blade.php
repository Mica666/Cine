<x-app-layout>
    
<div>
    <h1 class="text text-2xl text-gray-600 leading-8 font-bold">
{{$pelicula->nombre}}
    </h1>
    <br>
    <div>
    <img src="{{Storage::url($pelicula->image->url)}}" alt="holi"></div><br>
    
    <div class="row">
    <h1>Sipnosis: {{$pelicula->sinopsis}}</h1>
    </div>
    <br>
    <div>
        <h1>Generos: {{$pelicula->genero->nombre}}</h1>
    </div>
    <br>
    <div>
        <h1>Clasificacion: {{$pelicula->clasificacion->nombre}}</h1>
    </div>
    <br>
    <div>
    <h1>Director: {{$pelicula->director}}</h1>
    </div>
    <br>
    <div>
    <h1>Reparto: {{$pelicula->reparto}}</h1>
    </div>
    <br>
    <div>
    <h1>Duracion: {{$pelicula->duracion}}</h1> 
    </div>
    
    <br>
    <div>
    <h1>sala: {{$pelicula->sala->id}} </h1> 
    </div>
    <br>
    <article class="w-full h-80 bg-cover bg-center">
    <iframe width="560" height="315" src="{{$pelicula->trailer_url}}"></iframe>
    </article>


</div>


</x-app-layout>
