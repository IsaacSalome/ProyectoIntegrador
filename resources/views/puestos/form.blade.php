{{ $modo=='crear' ? ' ': ' '}} 
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Datos del puesto</h4>
            </div>
            <div class="card-body">
    


                    <div class="form-row">
                        <div class="form-group col">
                            <label class="control-label" for="puesto">{{'puesto:'}}</label>
                            <input class="form-control {{ $errors->has('puesto')?'is-invalid':'' }}" type="text" name="puesto" id="puesto" value="{{ isset($puesto->puesto)?$puesto->puesto:old('puesto') }}">
                        
                            {!! $errors->first('puesto','<div class="invalid-feedback">:message</div>') !!}
                        
                        </div>
                        <div class="form-group col">

                            <label class="control-label" for="salarioBase">{{'Salario Base:'}}</label>
                            <input  class="form-control {{ $errors->has('salarioBase')?'is-invalid':''}}" type="text" name="salarioBase" id="salarioBase" value="{{ isset($puesto->salarioBase)?$puesto->salarioBase:old('salarioBase') }}" >

                            {!! $errors->first('salarioBase','<div class="invalid-feedback">:message</div>') !!}

                        </div>

                        <div class="form-group col">
                            <label  class="control-label" for="horasTrabajo">{{'Horas de trabajo Semanales:'}}</label>
                            <input  class="form-control {{ $errors->has('horasTrabajo')?'is-invalid':''}}" type="text" name="horasTrabajo" id="horasTrabajo" value="{{ isset($puesto->horasTrabajo)?$puesto->horasTrabajo:old('horasTrabajo') }}" >

                            {!! $errors->first('horasTrabajo','<div class="invalid-feedback">:message</div>') !!}

                        </div>
                
                    </div>  
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>


    <input  type="submit" class="btn btn-success" value="{{ $modo=='crear' ? 'Agregar': 'Modificar'}}">

    <a class="btn btn-danger" href="{{ url('puestos') }}">Cancelar</a>