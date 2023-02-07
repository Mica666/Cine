@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Crear nuevo usuario</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.Usuario.store']) !!}
        <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre']) !!}

                @error('nombre')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Correo') !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'ingrese el correo']) !!}

                @error('slug')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Contraseña') !!}
                {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'ingrese la Contraseña']) !!}
            </div>
            
            
            
          {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}  

          <a class="btn btn-danger" href="{{route('admin.Usuario.index')}}">Cancelar</a>
       
    </div>
</div>
@stop
