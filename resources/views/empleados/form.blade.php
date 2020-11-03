  {{ $modo=='crear' ? ' ': 'Modificar Alumno'}} 
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Datos de Empleado</h4>
            </div>
            <div class="card-body">
    


   <div class="form-row">
    <div class="form-group col">
        <label class="control-label" for="nombrenombre">{{'Nombre:'}}</label>
        <input class="form-control {{ $errors->has('nombre')?'is-invalid':'' }}" type="text" name="nombre" id="nombre" value="{{ isset($empleado->nombre)?$empleado->nombre:old('nombre') }}">
    
        {!! $errors->first('nombre','<div class="invalid-feedback">:message</div>') !!}
    
    </div>
    <div class="form-group col">

        <label class="control-label" for="apellidoPaterno">{{'Apellido Paterno:'}}</label>
        <input  class="form-control {{ $errors->has('apellidoPaterno')?'is-invalid':''}}" type="text" name="apellidoPaterno" id="apellidoPaterno" value="{{ isset($empleado->apellidoPaterno)?$empleado->apellidoPaterno:old('apellidoPaterno') }}" >

        {!! $errors->first('apellidoPaterno','<div class="invalid-feedback">:message</div>') !!}

    </div>

        <div class="form-group col">
        <label  class="control-label" for="apellidoMaterno">{{'Apellido Materno:'}}</label>
        <input  class="form-control {{ $errors->has('apellidoMaterno')?'is-invalid':''}}" type="text" name="apellidoMaterno" id="apellidoMaterno" value="{{ isset($empleado->apellidoMaterno)?$empleado->apellidoMaterno:old('apellidoMaterno') }}" >

        {!! $errors->first('apellidoMaterno','<div class="invalid-feedback">:message</div>') !!}
        

    </div>
   </div>
   <div class="form-row">


    <div class="form-group col">
        <label for="sexo">{{ 'Sexo: '}}</label>
        <select id="sexo" name="sexo" class="form-control {{ $errors->has('sexo')?'is-invalid':'' }}" >
          <option selected>opciones...</option>
          <option value="{{ isset($empleado->sexo)?$empleado->sexo:'Mujer'}}">Mujer</option>
          <option value="{{ isset($empleado->sexo)?$empleado->sexo:'Hombre'}}">Hombre</option>
        </select>
    {!! $errors->first('sexodeltutor','<div class="invalid-feedback">:message</div>') !!}

    </div>


        
    <div class="form-group col">
        <label  class="control-label" for="edad">{{'Edad:'}}</label>
        <input  class="form-control {{ $errors->has('edad')?'is-invalid':'' }}" type="number" name="edad" id="edad" value="{{ isset($empleado->edad)?$empleado->edad:old('edad') }}" >
        {!! $errors->first('edad','<div class="invalid-feedback">:message</div>') !!}
    
    </div>
       
    </div>



    <div class="form-row">
        <div class="form-group col">
        <label  class="control-label" for="calle">{{'Calle:'}}</label>
        <input  class="form-control {{ $errors->has('calle')?'is-invalid':'' }}" type="text" name="calle" id="calle" value="{{ isset($empleado->calle)?$empleado->calle:old('calle') }}" >
        {!! $errors->first('calle','<div class="invalid-feedback">:message</div>') !!}

    </div>

    <div class="form-group col">
        <label  class="control-label" for="numeroInterior">{{'Número Interior:'}}</label>
        <input  class="form-control {{ $errors->has('numeroInterior')?'is-invalid':'' }}" type="text" name="numeroInterior" id="numeroInterior" value="{{ isset($empleado->numeroInterior)?$empleado->numeroInterior:old('numeroInterior') }}" >
        {!! $errors->first('numeroInterior','<div class="invalid-feedback">:message</div>') !!}

    </div>

    <div class="form-group col">
        <label  class="control-label" for="numeroExterior">{{'Número Exterior:'}}</label>
        <input  class="form-control {{ $errors->has('numeroExterior')?'is-invalid':'' }}" type="text" name="numeroExterior" id="numeroExterior" value="{{ isset($empleado->numeroExterior)?$empleado->numeroExterior:old('numeroExterior') }}" >
        {!! $errors->first('numeroExterior','<div class="invalid-feedback">:message</div>') !!}

   </div>

    <div class="form-group col">
        <label class="control-label" for="codigoPostal">{{'Código Postal:'}}</label>
        <input  class="form-control {{ $errors->has('codigoPostal')?'is-invalid':'' }}" type="text" name="codigoPostal" id="codigoPostal" value="{{ isset($empleado->codigoPostal)?$empleado->codigoPostal:old('codigoPostal') }}" >
        {!! $errors->first('codigoPostal','<div class="invalid-feedback">:message</div>') !!}

    </div>

    <div class="form-group col">
        <label class="control-label" for="localidad">{{'Localidad:'}}</label>
        <input  class="form-control {{ $errors->has('localidad')?'is-invalid':'' }} " type="text" name="localidad" id="localidad" value="{{ isset($empleado->localidad)?$empleado->localidad:old('localidad')}}" >
        {!! $errors->first('localidad','<div class="invalid-feedback">:message</div>') !!}

    </div>
        </div>

        <div class="form-row">


            <div class="form-group col">
        <label class="control-label" for="correo">{{'correo:'}}</label>
        <input  class="form-control {{ $errors->has('correo')?'is-invalid':'' }}" type="email" name="correo" id="correo" value="{{ isset($empleado->correo)?$empleado->correo:old('correo') }}" >
        {!! $errors->first('correo','<div class="invalid-feedback">:message</div>') !!}

    </div>

        <div class="form-group col">
        <label class="control-label" for="telefono">{{'Telefono:'}}</label>
        <input  class="form-control {{ $errors->has('telefono')?'is-invalid':'' }}" type="text" name="telefono" id="telefono" value="{{ isset($empleado->telefono)?$empleado->telefono:old('telefono')}}" >
        {!! $errors->first('telefono','<div class="invalid-feedback">:message</div>') !!}

    </div>
        </div>
        <div class="form-row">

        <div class="form-group col">
            <label class="control-label" for="curp">{{'curp:'}}</label>
            <input  class="form-control {{ $errors->has('curp')?'is-invalid':'' }}" type="text" name="curp" id="curp" value="{{ isset($empleado->curp)?$empleado->curp:old('curp') }}" >
            {!! $errors->first('curp','<div class="invalid-feedback">:message</div>') !!}
    
        </div>
    
            <div class="form-group col">
            <label class="control-label" for="rfc">{{'RFC:'}}</label>
            <input  class="form-control {{ $errors->has('rfc')?'is-invalid':'' }}" type="text" name="rfc" id="rfc" value="{{ isset($empleado->rfc)?$empleado->rfc:old('rfc')}}" >
            {!! $errors->first('rfc','<div class="invalid-feedback">:message</div>') !!}
    
        </div>
            </div>

            <div class="form-group col-md-6">
                <label for="id_puesto">Puesto</label>
                <select class="form-control" name="id_puesto" id="id_puesto">
                @foreach($puestos as $puesto)
                <option value=" {{ isset($puesto->id_puesto)?$puesto->id_puesto:old('id_puesto')}} " required>{{ $puesto->puesto }}</option>
                @endforeach
                </select>
              </div>


    <div class="form-group">
        <label class="control-label" for="foto">{{'foto del empleado:'}}</label>

    @if(isset($alumno->foto))
    <br>
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$alumno->foto }}" alt="" width="200">
    @endif
    
        <input class="form-control  {{ $errors->has('foto')?'is-invalid':'' }}" type="file" name="foto" id="foto" value="" >
    </div>

</div>
</div>
</div>
</div>
</div>
</div>


    <input  type="submit" class="btn btn-success" value="{{ $modo=='crear' ? 'Agregar': 'Modificar'}}">
        {!! $errors->first('foto','<div class="invalid-feedback">:message</div>') !!}

    <a class="btn btn-danger" href="{{ url('alumnos') }}">Cancelar</a>