<x-app-layout>
    <div >
         @livewire('carrousel')
         @livewire('peliv')
 <br>
            <div class="grid  gap-4 ">
                @foreach ($peliculas as $pelicula)
                    

                    <div class=" bg-pink-900 flex flex-col h-screen w-full pl-64">
                        <h1 class="text-4x1 leading-8 font-bold p-3">
                        <a href="{{route('Inicio.show', $pelicula)}}">
                            {{$pelicula->nombre}}
                        </a></h1>    
                    <article class="w-full h-80 bg-cover bg-center">
                    <img src="{{Storage::url($pelicula->image->url)}}" alt="hola">
                    </article>
                    </div>
                    
                




                    
                @endforeach 
         
        </div>
    </div>
</x-app-layout>  

