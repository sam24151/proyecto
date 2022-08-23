@extends('layouts.app')

@section('content')
<div class="container">
<h3>Editar país</h3>
<form action="{{url('/pais/'.$pais->id)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('pais.form',['modo' => 'Editar'])
</form>
</div>
@endsection