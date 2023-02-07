@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Crear nuevo horario</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.Horario.store']) !!}
        
        <div class="form-group">
            {!! Form::label('hora', 'Hora:') !!}
            {!! Form::time('hora', NULL, ['class' => 'form-control', 'placeholder' => 'Hora']) !!}

            @error('hora')
                <span class="text-danger">{{$message}}</span>
                @enderror
       
            </div>
            <div class="form-group">
            {!! Form::label('fecha', 'Fecha:') !!}
            {!! Form::date('fecha', NULL, ['class' => 'form-control', 'placeholder' => 'Fecha']) !!}

            @error('fecha')
                <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
       
            <div class="form-group">
                {!! Form::label('peliculas_id', 'Pelicula') !!}
                {!! Form::select('peliculas_id', $pelicula, null, ['class' => 'form-control']) !!}

                @error('peliculas_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div> 
            <div class="form-group">
                {!! Form::label('salas_id', 'Sala') !!}
                {!! Form::select('salas_id', $sala, null, ['class' => 'form-control']) !!}

                @error('salas_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
      
            
          {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}  
        {!! Form::close() !!}
    </div>
</div>

@stop

@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

<script>

    $(document).ready( function() {
        $("#nombre").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });
</script>
@endsection