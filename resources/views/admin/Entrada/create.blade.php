@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Crear nuevo entrada</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.Entrada.store']) !!}
        <div class="form-group">
        <div class="form-group">
                {!! Form::label('pelicula->nombre', 'Nombre') !!}
                {!! Form::select('pelicula->nombre', null, ['class' => 'form-control']) !!}

               
          {!! Form::submit('Crear ', ['class' => 'btn btn-primary']) !!}  

        <a class="btn btn-danger" href="{{route('admin.Entrada.index')}}">Cancelar</a>
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