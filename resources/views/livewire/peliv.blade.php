<div>

    <div>
        <label>Peliculas</label>
        <select wire:model="pelicula">
            <option value="0">== Peliculas ==</option>
            @foreach($peliculas as $pelicula)
            <option value="{{$pelicula->id}}">{{$pelicula->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div>
        @if(!is_null($horarios))
    <label>horarios</label>
        <select wire:model="horario">
            <option value="0">== horarios ==</option>
            @foreach($horarios as $horario)
            <option value="{{$horario->id}}">           {{$horario->fecha}} {{$horario->hora}}
            </option> 

        
            @endforeach
        </select>
    @endif

    </div>

</div>
