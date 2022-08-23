@extends('layouts.app')

@section('content')
<div class="container">
<h3>Formulario de creación de pais.</h3>
<form action="{{url('/pais')}}" method="post">
    @csrf
    @include('pais.form',['modo' => 'Crear'])
</form>
</div>
@endsection