@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/empleados/'.$empleado->id_Empleados) }}" method="POST" enctype="multipart/form-data">
   
{{ csrf_field() }}
{{ method_field('PATCH') }}
@include('empleados.form',['modo'=>'editar'])


</form>
</div>

@endsection