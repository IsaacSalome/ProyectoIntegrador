  {{ $modo=='crear' ? ' ': 'Modificar Alumno'}} 
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Datos de alumnos</h4>
            </div>
            <div class="card-body">
    


   <div class="form-row">
    <div class="form-group col">
        <label class="control-label" for="Nombre">{{'Nombre:'}}</label>
        <input class="form-control {{ $errors->has('Nombre')?'is-invalid':'' }}" type="text" name="Nombre" id="Nombre" value="{{ isset($alumno->nombre)?$alumno->nombre:old('Nombre') }}">
    
        {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}
    
    </div>
    <div class="form-group col">

        <label class="control-label" for="apellidoPaterno">{{'Apellido Paterno:'}}</label>
        <input  class="form-control {{ $errors->has('apellidoPaterno')?'is-invalid':''}}" type="text" name="apellidoPaterno" id="apellidoPaterno" value="{{ isset($alumno->apellidoPaterno)?$alumno->apellidoPaterno:old('apellidoPaterno') }}" >

        {!! $errors->first('apellidoPaterno','<div class="invalid-feedback">:message</div>') !!}

    </div>

        <div class="form-group col">
        <label  class="control-label" for="apellidoMaterno">{{'Apellido Materno:'}}</label>
        <input  class="form-control {{ $errors->has('apellidoMaterno')?'is-invalid':''}}" type="text" name="apellidoMaterno" id="apellidoMaterno" value="{{ isset($alumno->apellidoMaterno)?$alumno->apellidoMaterno:old('apellidoMaterno') }}" >

        {!! $errors->first('apellidoMaterno','<div class="invalid-feedback">:message</div>') !!}

    </div>
    <div class="form-group col">
        <label  class="control-label" for="edad">{{'Edad:'}}</label>
        <input  class="form-control {{ $errors->has('edad')?'is-invalid':'' }}" type="number" name="edad" id="edad" value="{{ isset($alumno->edad)?$alumno->edad:old('edad') }}" >
        {!! $errors->first('edad','<div class="invalid-feedback">:message</div>') !!}
    
    </div>
       
    </div>



    <div class="form-row">
        <div class="form-group col">
        <label  class="control-label" for="calle">{{'Calle:'}}</label>
        <input  class="form-control {{ $errors->has('calle')?'is-invalid':'' }}" type="text" name="calle" id="calle" value="{{ isset($alumno->calle)?$alumno->calle:old('calle') }}" >
        {!! $errors->first('calle','<div class="invalid-feedback">:message</div>') !!}

    </div>

    <div class="form-group col">
        <label  class="control-label" for="numeroInterior">{{'Número Interior:'}}</label>
        <input  class="form-control {{ $errors->has('numeroInterior')?'is-invalid':'' }}" type="text" name="numeroInterior" id="numeroInterior" value="{{ isset($alumno->numeroInterior)?$alumno->numeroInterior:old('numeroInterior') }}" >
        {!! $errors->first('numeroInterior','<div class="invalid-feedback">:message</div>') !!}

    </div>

    <div class="form-group col">
        <label  class="control-label" for="numeroExterior">{{'Número Exterior:'}}</label>
        <input  class="form-control {{ $errors->has('numeroExterior')?'is-invalid':'' }}" type="text" name="numeroExterior" id="numeroExterior" value="{{ isset($alumno->numeroExterior)?$alumno->numeroExterior:old('numeroExterior') }}" >
        {!! $errors->first('numeroExterior','<div class="invalid-feedback">:message</div>') !!}

   </div>

    <div class="form-group col">
        <label class="control-label" for="codigoPostal">{{'Código Postal:'}}</label>
        <input  class="form-control {{ $errors->has('codigoPostal')?'is-invalid':'' }}" type="text" name="codigoPostal" id="codigoPostal" value="{{ isset($alumno->codigoPostal)?$alumno->codigoPostal:old('codigoPostal') }}" >
        {!! $errors->first('codigoPostal','<div class="invalid-feedback">:message</div>') !!}

    </div>

    <div class="form-group col">
        <label class="control-label" for="localidad">{{'Localidad:'}}</label>
        <input  class="form-control {{ $errors->has('localidad')?'is-invalid':'' }} " type="text" name="localidad" id="localidad" value="{{ isset($alumno->localidad)?$alumno->localidad:old('localidad')}}" >
        {!! $errors->first('localidad','<div class="invalid-feedback">:message</div>') !!}

    </div>
        </div>

        <div class="form-row">


            <div class="form-group col">
        <label class="control-label" for="correo">{{'correo:'}}</label>
        <input  class="form-control {{ $errors->has('correo')?'is-invalid':'' }}" type="email" name="correo" id="correo" value="{{ isset($alumno->correo)?$alumno->correo:old('correo') }}" >
        {!! $errors->first('correo','<div class="invalid-feedback">:message</div>') !!}

    </div>

        <div class="form-group col">
        <label class="control-label" for="telefono">{{'Telefono:'}}</label>
        <input  class="form-control {{ $errors->has('telefono')?'is-invalid':'' }}" type="text" name="telefono" id="telefono" value="{{ isset($alumno->telefono)?$alumno->telefono:old('telefono')}}" >
        {!! $errors->first('telefono','<div class="invalid-feedback">:message</div>') !!}

    </div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Datos del tutor</h4>
            </div>
            <div class="card-body">
    

    <div class="form-row">
        <div class="form-group col">
            <label class="control-label" for="nombredeltutor">{{'Nombre:'}}</label>
            <input class="form-control {{ $errors->has('nombredeltutor')?'is-invalid':'' }}" type="text" name="nombredeltutor" id="nombredeltutor" value="{{ isset($alumno->nombre)?$tutores->nombre:old('nombredeltutor')}}" >
        {!! $errors->first('nombredeltutor','<div class="invalid-feedback">:message</div>') !!}

       </div>
        <div class="form-group col">
    
            <label class="control-label" for="apellidoPaternodeltutor">{{'Apellido Paterno:'}}</label>
            <input  class="form-control {{ $errors->has('apellidoPaternodeltutor')?'is-invalid':'' }}" type="text" name="apellidoPaternodeltutor" id="apellidoPaternodeltutor" value="{{ isset($alumno->apellidoPaterno)?$tutores->apellidoPaterno:old('apellidoPaternodeltutor')}}" >
        {!! $errors->first('apellidoPaternodeltutor','<div class="invalid-feedback">:message</div>') !!}

        </div>
    
            <div class="form-group col">
            <label  class="control-label" for="apellidoMaternodeltutor">{{'Apellido Materno:'}}</label>
            <input  class="form-control {{ $errors->has('apellidoMaternodeltutor')?'is-invalid':'' }}" type="text" name="apellidoMaternodeltutor" id="apellidoMaternodeltutor" value="{{ isset($alumno->apellidoMaterno)?$tutores->apellidoMaterno:old('apellidoMaternodeltutor')}}" >
        {!! $errors->first('apellidoMaternodeltutor','<div class="invalid-feedback">:message</div>') !!}

        </div>
        <div class="form-group col">
            <label  class="control-label" for="edaddeltutor">{{'Edad:'}}</label>
            <input  class="form-control {{ $errors->has('edaddeltutor')?'is-invalid':'' }}" type="number" name="edaddeltutor" id="edaddeltutor" value="{{ isset($alumno->edad)?$tutores->edad:old('edaddeltutor')}}" >
        {!! $errors->first('edaddeltutor','<div class="invalid-feedback">:message</div>') !!}

        </div>
            
        </div>
    <div class="form-row">

        <div class="form-group col">
            <label for="sexodeltutor">{{ 'Sexo: '}}</label>
            <select id="sexodeltutor" name="sexodeltutor" class="form-control {{ $errors->has('sexodeltutor')?'is-invalid':'' }}" >
              <option selected>opciones...</option>
              <option value="{{ isset($alumno->sexo)?$tutores->sexo:'Mujer'}}">Mujer</option>
              <option value="{{ isset($alumno->sexo)?$tutores->sexo:'Hombre'}}">Hombre</option>
            </select>
        {!! $errors->first('sexodeltutor','<div class="invalid-feedback">:message</div>') !!}

        </div>

        <div class="form-group col">
            <label for="parentesco">{{ 'Parentesco: '}}</label>
            <select id="parentesco" name="parentesco"  class="form-control  {{ $errors->has('parentesco')?'is-invalid':'' }}" > 
              <option selected>opciones...</option>
              <option value="{{ isset($alumno->tparentesco)?$tutores->parentesco:'Padre'}}">Padre</option>
              <option value="{{ isset($alumno->tparentesco)?$tutores->parentesco:'Madre'}}">Madre</option>
              <option value="{{ isset($alumno->tparentesco)?$tutores->parentesco:'Hermano'}}">Hermano</option>
              <option value="{{ isset($alumno->tparentesco)?$tutores->parentesco:'Hermana'}}">Hermana</option>
              <option value="{{ isset($alumno->tparentesco)?$tutores->parentesco:'Esposo'}}">Esposo</option>
              <option value="{{ isset($alumno->tparentesco)?$tutores->parentesco:'Esposa'}}">Esposa</option>
            </select>
        {!! $errors->first('parentesco','<div class="invalid-feedback">:message</div>') !!}

        </div>

            <div class="form-group col">
                <label  class="control-label" for="telefonodeltutor">{{'telefono:'}}</label>
                <input  class="form-control  {{ $errors->has('telefonodeltutor')?'is-invalid':'' }}" type="text" name="telefonodeltutor" id="telefonodeltutor" value="{{ isset($alumno->telefono)?$tutores->telefono:old('telefonodeltutor')}}" >
        {!! $errors->first('telefonodeltutor','<div class="invalid-feedback">:message</div>') !!}

            </div>
 
    </div>



    <div class="form-group">
        <label class="control-label" for="foto">{{'foto del estudiante:'}}</label>

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