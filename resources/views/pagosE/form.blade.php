{{ $modo=='crear' ? ' ': ' '}} 
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Datos del pago</h4>
            </div>
            <div class="card-body">
    


                    <div class="form-row">
                      <div class="form-group col">
                          <label class="control-label" for="horasTrabajadas">{{'Horas de trabajo:'}}</label>
                          <input class="form-control {{ $errors->has('horasTrabajadas')?'is-invalid':'' }}" type="text" name="horasTrabajadas" id="horasTrabajadas" value="{{ isset($pago->horasTrabajadas)?$pago->horasTrabajadas:old('horasTrabajadas') }}" required>
                      
                          {!! $errors->first('horasTrabajadas','<div class="invalid-feedback">:message</div>') !!}
                      
                      </div>

                      <div class="form-group col">
                          <label class="control-label" for="fecha">{{'Fecha:'}}</label>
                          <input class="form-control {{ $errors->has('fecha')?'is-invalid':'' }}" type="date" name="fecha" id="fecha" value="{{ isset($pago->fecha)?$pago->fecha:old('fecha') }}" required>
                      
                          {!! $errors->first('fecha','<div class="invalid-feedback">:message</div>') !!}
                      
                      </div>
                    </div>  

                        <div class="form-group col-md-6">
                            <label for="id_Empleados">Empleado</label>
                            <select class="form-control" name="id_Empleados" id="id_Empleados">
                            @foreach($empleados as $empleado)
                            <option value=" {{ isset($empleado->id_Empleados)?$empleado->id_Empleados:old('id_Empleados')}} " required>{{ $empleado->nombre }} {{ $empleado->apellidoPaterno }}</option>
                            @endforeach
                            </select>
                        </div>

                
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>


    <input  type="submit" class="btn btn-success" value="{{ $modo=='crear' ? 'Agregar': 'Modificar'}}">

    <a class="btn btn-danger" href="{{ url('pagosA') }}">Cancelar</a>