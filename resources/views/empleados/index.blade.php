
@extends('layouts.app')


@section('content')

<div class="container">

@if (Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{    Session::get('Mensaje') }}
</div>
    
@endif

<a href="{{ url('empleados/create') }}" class="btn btn-success">Agregar empleado</a>
<br/>
<br/>

<table class="table table-light table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>

            <th>edad</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
        </thead>
    <tbody>

    @foreach ($empleados as $empleado )
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->foto }}" alt="" width="100">

            </td>
            <td>{{ $empleado->nombre }} {{ $empleado->apellidoPaterno }} {{ $empleado->apellidoMaterno }}</td>

            <td>{{ $empleado->edad }}</td>
            <td>{{ $empleado->correo }}</td>
            <td>
            <a class="btn btn-warning" href="{{ url('/empleados',['empleado'=>$empleado->id_Empleados.'/edit']) }}">Editar</a>    
        
            <form method="POST" action="{{ url('/empleados',['empleado'=>$empleado->id_Empleados]) }}" style="display:inline">
            {{csrf_field()}}
            {{ method_field('DELETE')}}
            <button  class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?')" >Borrar</button>
            </form>
             </td>

        </tr>
    @endforeach
    </tbody>


</table>

{{$empleados->links()}}

</div>

@endsection