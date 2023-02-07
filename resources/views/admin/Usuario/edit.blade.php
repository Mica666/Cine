@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Editar usuario</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif


<div class="card">
    <div class="card-body">
    {!! Form::model($user , ['route' => ['admin.Usuario.update', $user], 'method' => 'put']) !!}
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

            
            {!! Form::label('Roles') !!}
            @foreach($roles as $role)
            <div>
                <label>
                    {!! form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                    {{$role->name}}             
                </label>
            </div>
            @endforeach
            
          {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}  

          <a class="btn btn-danger" href="{{route('admin.Usuario.index', $user)}}">Cancelar</a>
       
    </div>
</div>
@stop