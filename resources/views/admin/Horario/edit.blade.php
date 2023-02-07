@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Editar horario</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body">
    {!! Form::model($horario , ['route' => ['admin.Horario.update', $horario], 'method' => 'put']) !!}
   
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
                {!! Form::label('peliculas_id', 'Peliculas') !!}
                {!! Form::select('peliculas_id', $pelicula, null, ['class' => 'form-control']) !!}
            </div>
        <div class="form-group">
                {!! Form::label('salas_id', 'Sala') !!}
                {!! Form::select('salas_id', $sala, null, ['class' => 'form-control']) !!}
        </div>

            
          {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}  
       
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

