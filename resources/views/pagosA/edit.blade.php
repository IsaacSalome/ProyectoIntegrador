@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/pagosA/'.$pago->id_pagosA) }}" method="POST" enctype="multipart/form-data">
   
{{ csrf_field() }}
{{ method_field('PATCH') }}
@include('pagosA.form',['modo'=>'editar'])


</form>
</div>

@endsection