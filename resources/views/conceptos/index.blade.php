@extends('layouts.app')


@section('content')

<div class="container">

@if (Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{    Session::get('Mensaje') }}
</div>
    
@endif

<a href="{{ url('conceptos/create') }}" class="btn btn-success">Agregar concepto de pago</a>
<br/>
<br/>

<table class="table table-light table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Concepto</th>
            <th>Costo</th>
            <th>Acciones</th>
        </tr>
        </thead>
    <tbody>

    @foreach ($conceptos as $concepto )
        <tr>
            <td>{{$loop->iteration}}</td>

            <td>{{ $concepto->concepto }} </td>

            <td>{{ $concepto->costo }}</td>

            <td>
            <a class="btn btn-warning" href="{{ url('/conceptos',['concepto'=>$concepto->id_concepto.'/edit']) }}">Editar</a>    
        
            <form method="POST" action="{{ url('/conceptos',['concepto'=>$concepto->id_concepto]) }}" style="display:inline">
            {{csrf_field()}}
            {{ method_field('DELETE')}}
            <button  class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?')" >Borrar</button>
            </form>
             </td>

        </tr>
    @endforeach
    </tbody>


</table>

{{$conceptos->links()}}

</div>

@endsection