@extends('layouts.app')


@section('content')

<div class="container">

@if (Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{    Session::get('Mensaje') }}
</div>
    
@endif

<a href="{{ url('pagosE/create') }}" class="btn btn-success">Agregar pago</a>
<br/>
<br/>

<table class="table table-light table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Horas Trabajadas</th>
            <th>Empleado</th>
            <th>Fecha</th>
            <th>Total</th>
            <th>Puesto</th>
            <th>Salario Base</th>

            <th>Acciones</th>
        </tr>
        </thead>
    <tbody>

    @foreach ($pagos as $pago )
        <tr>
            <td>{{$loop->iteration}}</td>
                
            <td>{{ $pago->horasTrabajadas }}</td>

            <td>{{ $pago->empleado }} </td>

            <td>{{ $pago->fecha }}</td>

            <td>{{ $pago->total }}</td>
            <td>{{ $pago->puesto }}</td>
            <td>{{ $pago->salarioBase }}</td>

    



            <td>
            <a class="btn btn-warning" href="{{ url('/pagosE',['pago'=>$pago->id_pagosE.'/edit']) }}">Editar</a>    
        
            <form method="POST" action="{{ url('/pagosE',['pago'=>$pago->id_pagosE]) }}" style="display:inline">
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