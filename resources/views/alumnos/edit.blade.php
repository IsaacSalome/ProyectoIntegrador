@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/alumnos/'.$alumno->id_Estudiantes) }}" method="POST" enctype="multipart/form-data">
   
{{ csrf_field() }}
{{ method_field('PATCH') }}
<input id="id_Estudiantes" name="id_Estudiantes" type="hidden" value="{{ (isset($alumno))?$alumno->id_Estudiantes:old('id_Estudiantes')}}">

@include('alumnos.form',['modo'=>'editar'])


</form>
</div>

@endsection