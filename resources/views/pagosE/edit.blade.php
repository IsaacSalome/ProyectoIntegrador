@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/pagosE/'.$pago->id_pagosE) }}" method="POST" enctype="multipart/form-data">
   
{{ csrf_field() }}
{{ method_field('PATCH') }}
<input id="id_pagosE" name="id_pagosE" type="hidden" value="{{ (isset($pago))?$pago->id_pagosE:old('id_pagosE')}}">

@include('pagosE.form',['modo'=>'editar'])


</form>
</div>

@endsection