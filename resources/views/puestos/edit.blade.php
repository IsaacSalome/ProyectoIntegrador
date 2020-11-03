@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/puestos/'.$puesto->id_puesto) }}" method="POST" enctype="multipart/form-data">
   
{{ csrf_field() }}
{{ method_field('PATCH') }}
@include('puestos.form',['modo'=>'editar'])


</form>
</div>

@endsection