@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Lista de Usuarios</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
<div class="card-header">
<a class="btn btn-primary " href="{{route('admin.Usuario.create')}}">Crear Nuevo</a>
</div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr class="bg-dark">
                    <td>id</td>
                    <td>Nombre</td>
                    <td>Correo</td>
                    
                    <td>Roles</td>
                    <td>Creacion</td>
                    <td colspan="6"></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                  
                  <td>@forelse ($user->roles as $role)
                                    <span class="badge bg-red text-white">{{ $role->name }}</span>
                                @empty
                                    <span class="badge  bg-green text-white">Client</span>
                                @endforelse
                            </td>  
                            <td>{{$user->created_at}}</td>
                    <td colspan="6" width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.Usuario.edit', $user)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.Usuario.destroy', $user)}}" method="POST">
                            @csrf
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
@endsection