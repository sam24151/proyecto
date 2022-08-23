@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        {{ Session::get('mensaje')}}
    </div>
@endif

<div>
<a href="{{url('pais/create')}}" class="btn btn-success my-2" >Registrar nuevo Pais</a></div>
<h3>Mostrar la lista de Paises</h3>
<h5>Se muestra la lista de paises, podemos crear, editar, eliminar.</h5>
<h5>Al editar el país, podemos observar una tabla en la parte de abajo que muestra un Historial de los cambios hechos en ese pais, el id representa que tantos cambios se han hecho. Mientras más bajo el id más viejo el registro.</h5>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Color Actual</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($paises as $pais)
        <tr>
            <td>{{$pais->id}}</td>
            <td>{{$pais->name}}</td>
            <td>{{$pais->color}}</td>
            <td>
                <a href="{{url('/pais/'.$pais->id.'/edit')}}" class="btn btn-warning">
                    Editar
                </a>
                <form action="{{url('/pais/'.$pais->id)}}" method="post" class="d-inline">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Deseas eliminar?')" value="borrar" class="btn btn-danger">
                </form>
            </td>
        </tr>    
        @endforeach
    </tbody>
</table>
{!! $paises->links() !!}
</div>
@endsection