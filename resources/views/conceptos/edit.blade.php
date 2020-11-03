@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/conceptos/'.$concepto->id_concepto) }}" method="POST" enctype="multipart/form-data">
   
{{ csrf_field() }}
{{ method_field('PATCH') }}
@include('conceptos.form',['modo'=>'editar'])


</form>
</div>

@endsection