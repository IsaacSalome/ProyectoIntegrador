@extends('layouts.app')


@section('content')

<div class="container">

@if (Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{    Session::get('Mensaje') }}
</div>
    
@endif

<a href="{{ url('puestos/create') }}" class="btn btn-success">Agregar puesto</a>
<br/>
<br/>

<table class="table table-light table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Puesto</th>
            <th>Salario</th>
            <th>Horas de trabajo</th>
            <th>Acciones</th>
        </tr>
        </thead>
    <tbody>

    @foreach ($puestos as $puesto )
        <tr>
            <td>{{$loop->iteration}}</td>

            <td>{{ $puesto->puesto }} </td>

            <td>{{ $puesto->salarioBase }}</td>
            <td>{{ $puesto->horasTrabajo }}</td>
            <td>
            <a class="btn btn-warning" href="{{ url('/puestos',['puesto'=>$puesto->id_puesto.'/edit']) }}">Editar</a>    
        
            <form method="POST" action="{{ url('/puestos',['puesto'=>$puesto->id_puesto]) }}" style="display:inline">
            {{csrf_field()}}
            {{ method_field('DELETE')}}
            <button  class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?')" >Borrar</button>
            </form>
             </td>

        </tr>
    @endforeach
    </tbody>


</table>

{{$puestos->links()}}

</div>

@endsection