<x-app-layout>
@livewire('carrousel')
 <br>
        <div class="grid  gap-4">
                @foreach ($peliculas as $pelicula)
                    <div class="row">
                        <h1 class="text text-2xl text-gray-600 leading-8 font-bold">
                        <a href="{{route('Cartelera.show', $pelicula)}}">
                            {{$pelicula->nombre}}
                        </a></h1>
                    </div>
                    
                    <article class="w-full h-80 bg-cover bg-center">
                        <img src="{{Storage::url($pelicula->image->url)}}" alt="hola">
                    </article>
                @endforeach 
        </div>

</x-app-layout>  