@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Lista de beneficios</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    
<div class="card-header">
<a class="btn btn-primary " href="{{route('admin.Beneficio.create')}}">Crear Nuevo</a>
</div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr class="bg-dark">
                    <td width="10px"> id</td>
                    <td>Nombre</td>
                    <td>Descripcion</td>
                    <td>Descuento</td>
                    <td>Dias</td>
                    <td>Image</td>
                    <td colspan="6"> </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($beneficios as $beneficio)
                <tr>
                    <td>{{$beneficio->id}}</td>
                    <td>{{$beneficio->nombre}}</td>
                    <td>{{$beneficio->descripcion}}</td>
                    <td>{{$beneficio->descuento}}%</td>
                    <td>{{$beneficio->dia->dia}}</td>
                    <td><img height="150xp" src="{{Storage::url($beneficio->image->url)}}" alt=""></td>
                    
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.Beneficio.edit', $beneficio)}}">Editar</a>
                    </td>

                    <td width="10px">
                        <form action="{{route('admin.Beneficio.destroy', $beneficio)}}" class="form-elimin" method="POST">
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
        '??Eliminado!',
        'Su archivo ha sido eliminado.',
        'success')
    </script>
@endif

<script>
    $('.form-elimin').submit(function(e){
        e.preventDefault();    
  Swal.fire({
  title: '??Est??s seguro?',
  text: "??No podr??s revertir esto!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'S??, b??rralo!'
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
