<x-app-layout>
@livewire('carrousel')
 <br>
        <div class="grid  gap-4">
                @foreach ($beneficios as $beneficio)
                    <div class="row">
                        <h1 class="text-4x1 leading-8 font-bold">
                            {{$beneficio->nombre}}
                        </a></h1>
                    </div>
                    
    <div class="row">
    <h1>Descripcion: {{$beneficio->descripcion}}</h1>
    </div> 
    <div>
    <h1>beneficio disponible todos los {{$beneficio->dia->dia}}</h1>
    </div>
    <div>
    <h1>Descuento: {{$beneficio->descuento}}</h1>
    </div>

                    <article class="w-full h-80 bg-cover bg-center">
                        <img src="{{Storage::url($beneficio->image->url)}}" alt="hola">
                    </article>
                @endforeach 
        </div>

    
    </div>
    </x-app-layout>  