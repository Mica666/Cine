<x-app-layout>
@livewire('carrousel')
 <br>
        <div class="grid  gap-4">
                @foreach ($horarios as $horario)
                    <div class="row">
                        <h1 class="text-4x1 leading-8 font-bold">
                            Funciones: <br>
                            {{$horario->pelicula->nombre}}:
                        {{$horario->fechs}} {{$horario->hora}}
                        </a>
               
    </div>

                @endforeach 


    </div>
    </x-app-layout>  