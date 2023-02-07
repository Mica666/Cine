@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Editar pelicula</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body">
    {!! Form::model($pelicula , ['route' => ['admin.Peliculas.update', $pelicula], 'method' => 'put', 'files' => true]) !!}
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
                {!! Form::label('sinopsis', 'sinopsis') !!}
                {!! Form::text('sinopsis', null, ['class' => 'form-control', 'placeholder' => 'ingrese el slug']) !!}

            </div>
            <div class="form-group">
                {!! Form::label('director', 'director') !!}
                {!! Form::text('director', null, ['class' => 'form-control', 'placeholder' => 'ingrese el slug']) !!}

            </div>
            <div class="form-group">
                {!! Form::label('reparto', 'reparto') !!}
                {!! Form::text('reparto', null, ['class' => 'form-control', 'placeholder' => 'ingrese el slug']) !!}

            </div>
            <div class="form-group">
                {!! Form::label('duracion', 'duracion') !!}
                {!! Form::text('duracion', null, ['class' => 'form-control', 'placeholder' => 'ingrese el slug']) !!}

            </div>
            <div class="form-group">
                {!! Form::label('trailer_url', 'trailer') !!}
                {!! Form::text('trailer_url', null, ['class' => 'form-control', 'placeholder' => 'ingrese el slug']) !!}

            </div>
            <div class="form-group">
                {!! Form::label('clasificacions_id', 'Clasificacion') !!}
                {!! Form::select('clasificacions_id', $clasificacion, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('generos_id', 'Genero') !!}
                {!! Form::select('generos_id', $genero, null, ['class' => 'form-control']) !!}
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="image-wrapper">
                    @if ($pelicula->image)
                                <img id="defaul" src="{{Storage::url($pelicula->image->url)}}" alt="">
                            @else
                                <img id="defaul" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6X8s6XUkA5_bKBW5nHbVoFYyNPSDO1Z-iuH1Y5chMRXgtTcqfXpB8gbfmrmhleKLZQdk&usqp=CAU" alt="">
                            @endif </div>
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
          {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}  

          <a class="btn btn-danger" href="{{route('admin.Peliculas.index', $pelicula)}}">Cancelar</a>
       
    </div>
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