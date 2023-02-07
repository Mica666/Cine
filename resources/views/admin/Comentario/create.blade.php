@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content')

<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.Comentario.store', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre']) !!}

                @error('nombre')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('correo', 'Correo') !!}
                {!! Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'ingrese el correo']) !!}

                @error('correo')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('telefono', 'Telefono') !!}
                {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'ingrese su telefono']) !!}

                @error('descripcion')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
         
            
           
            <br>
            <br>
            
          {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}  
        <a class="btn btn-danger" href="{{route('admin.Comentario.create')}}">Cancelar</a>
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

        //cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

function cambiarImagen(event){
    var file = event.target.files[0];

    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("defaul").setAttribute('src', event.target.result);
    };
    reader.readAsDataURL(file);
}
</script>
@endsection