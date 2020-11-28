@extends('layouts.app')


@section('content')

<div class="container">

@if (Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{    Session::get('Mensaje') }}
</div>
    
@endif

<a href="{{ url('pagosA/create') }}" class="btn btn-success">Agregar pago</a>
<br/>
<br/>

<table class="table table-light table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Concepto</th>
            <th>Fecha</th>
            <th>Estudiante</th>
            <th>Total</th>

            <th>Acciones</th>
        </tr>
        </thead>
    <tbody>

    @foreach ($pagos as $pago )
        <tr>
            <td>{{$loop->iteration}}</td>
                
            <td>{{ $pago->concepto }}</td>

            <td>{{ $pago->fecha }} </td>

            <td>{{ $pago->nombre }}</td>

            <td>{{ $pago->costo }}</td>

    
  


            <td>
            <a class="btn btn-warning" href="{{ url('/pagosA',['pago'=>$pago->id_pagosA.'/edit']) }}">Editar</a>    
        
            <form method="POST" action="{{ url('/pagosA',['pago'=>$pago->id_pagosA]) }}" style="display:inline">
            {{csrf_field()}}
            {{ method_field('DELETE')}}
            <button  class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?')" >Borrar</button>
            </form>
             </td>

        </tr>
    @endforeach
    </tbody>


</table>

{{$pagos->links()}}

</div>

@endsection