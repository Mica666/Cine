@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Lista de entradas</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
<div class="card-header">
<a class="btn btn-primary " href="{{route('admin.Entrada.create')}}">Nuevo</a>
</div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr class="bg-dark">
                    <td>id</td>
                    <td>Usuario</td>
                    <td>Tipo</td>      
                    <td>Pelicula</td>
                    <td>Horario</td>
                    <td>Beneficio</td>
                    <td>Combo</td>  
                    <td>Sala</td>
                    <td>Butaca</td>
                    <td>Precio</td>
                    <td colspan="6"></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($entradas as $entrada)
                <tr>
                    <td>{{$entrada->id}}</td>
                    <td>{{$entrada->user->name}}</td>
                    <td>{{$entrada->tipo->tipo}} {{ $precio3 = $entrada->tipo->price}}</td>  
                    <td>{{$entrada->pelicula->nombre}}</td>
                    <td>{{$entrada->horario->fecha}} {{$entrada->horario->hora}} </td>
                    <td>{{$entrada->beneficio->nombre}} <br> Descuento del {{ $precio1 = $entrada->beneficio->descuento}} %  </td>    
                    <td>{{$entrada->combo->nombre}} {{ $precio2 = $entrada->combo->precio}}</td>
                    <td>{{$entrada->horario->sala->id}}</td>
                    <td>{{$entrada->butaca->id}}</td>
                    <td>{{ ($precio2 + $precio3) - (( ($precio2 + $precio3) * $precio1 ) /100) }}</td>
               
                    
                    <td></td>
                  
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    
</div>
@stop