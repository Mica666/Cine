@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Crear nuevo beneficio</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.Beneficio.store', 'files' => true]) !!}
        <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre']) !!}

                @error('nombre')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'ingrese el slug', 'readonly']) !!}

                @error('slug')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('descripcion', 'Descripcion') !!}
                {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'ingrese la descripcion']) !!}
                
                @error('descripcion')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('descuento', 'Descuento') !!}
                {!! Form::text('descuento', null, ['class' => 'form-control', 'placeholder' => 'ingrese la descuento']) !!}

                @error('descuento')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('dias_id', 'Dia') !!}
                {!! Form::select('dias_id', $dia, null, ['class' => 'form-control']) !!}
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="image-wrapper">
                        <img id="defaul" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6X8s6XUkA5_bKBW5nHbVoFYyNPSDO1Z-iuH1Y5chMRXgtTcqfXpB8gbfmrmhleKLZQdk&usqp=CAU" alt="">
                    </div>
                 </div>
            <div class="col">
                <div class="form-group">
                {!! Form::label('file', 'Inserte una imagen') !!}
                {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                </div> 
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, tempora. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima dignissimos totam, fuga libero molestiae unde consectetur temporibus ratione qui! Ex?</p>
             @error('file')
                <span class="text-danger">{{$message}}</span>
                @enderror 
            </div> 
          
           </div>
          {!! Form::submit('Crear ', ['class' => 'btn btn-primary']) !!}  

        <a class="btn btn-danger" href="{{route('admin.Beneficio.index')}}">Cancelar</a>
    
</div>

@stop

@section('css')
<style>
    .image-wrapper{
        position: relative;
        padding-bottom: 56.25%;
    }

    .image-wrapper img{
        position: absolute;
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>

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