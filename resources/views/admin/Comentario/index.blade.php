@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Lista de combos</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
<div class="card-header">
<a class="btn btn-primary " href="{{route('admin.Comentario.create')}}">Crear Nuevo</a>
</div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr class="bg-dark">
                    <td>id</td>
                    <td>Nombre</td>
                    <td>Correo</td>
                    <td>telefono</td>
                    <td>Motivo</td>
                    <td>Texto</td>
                    <td colspan="6"></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($comentarios as $comentario)
                <tr>
                    <td>{{$comentario->id}}</td>
                    <td>{{$comentario->nombre}}</td>
                    <td>{{$comentario->correo}}</td>
                    <td>{{$comentario->telefono}}</td>
                    <td>{{$comentario->motivo}}</td>
                    <td>{{$comentario->texto}}</td>
                    <td colspan="6" width="20px">
                        <a class="btn btn-primary btn-sm" href="">Responder</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop