@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Lista de horarios</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
<div class="card-header">
<a class="btn btn-primary " href="{{route('admin.Horario.create')}}">Crear Nuevo</a>
</div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr class="bg-dark">
                    <td>id</td>
                    <td>Horas</td>
                    <td>fecha</td>
                     <td>Pelicula</td>
                    <td>Sala</td>
                    <td colspan="6"></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($horarios as $horario)
                <tr>
                    <td>{{$horario->id}}</td>
                    <td>{{$horario->hora}}</td>
                    <td>{{$horario->fecha}}</td>
                    <td>{{$horario->pelicula->nombre}}</td>
                    <td>{{$horario->sala->id}}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.Horario.edit', $horario)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.Horario.destroy', $horario)}}" class="form-elimin" method="POST">
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.Horario.destroy', $horario)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
</div>
@stop





@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('act') == 'ok')
<script>
    Swal.fire({
  icon: 'success',
  title: 'Se actualizo con exito',
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif

@if (session('creado') == 'ok')
<script>
    Swal.fire({
  icon: 'success',
  title: 'Se creo con exito',
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif

@if (session('eliminar') == 'ok')
    <script> 
        Swal.fire(
        '¡Eliminado!',
        'Su archivo ha sido eliminado.',
        'success')
    </script>
@endif

<script>
    $('.form-elimin').submit(function(e){
        e.preventDefault();    
  Swal.fire({
  title: '¿Estás seguro?',
  text: "¡No podrás revertir esto!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sí, bórralo!'
}).then((result) => {
  if (result.isConfirmed) {
    this.submit();
  }
})
    });

</script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
@stop