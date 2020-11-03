
@extends('layouts.app')


@section('content')

<div class="container">

@if (Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{    Session::get('Mensaje') }}
</div>
    
@endif

<a href="{{ url('alumnos/create') }}" class="btn btn-success">Agregar Alumnos</a>
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

    @foreach ($alumnos as $alumno )
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$alumno->foto }}" alt="" width="100">

            </td>
            <td>{{ $alumno->nombre }} {{ $alumno->apellidoPaterno }} {{ $alumno->apellidoMaterno }}</td>

            <td>{{ $alumno->edad }}</td>
            <td>{{ $alumno->correo }}</td>
            <td>
            <a class="btn btn-warning" href="{{ url('/alumnos',['alumno'=>$alumno->id_Estudiantes.'/edit']) }}">Editar</a>    
        
            <form method="POST" action="{{ url('/alumnos',['alumno'=>$alumno->id_Estudiantes]) }}" style="display:inline">
            {{csrf_field()}}
            {{ method_field('DELETE')}}
            <button  class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?')" >Borrar</button>
            </form>
             </td>

        </tr>
    @endforeach
    </tbody>


</table>

{{$alumnos->links()}}

</div>

@endsection