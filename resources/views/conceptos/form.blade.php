{{ $modo=='crear' ? ' ': 'Modificar Alumno'}} 
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Datos del Concepto de pago</h4>
            </div>
            <div class="card-body">
    


                    <div class="form-row">
                        <div class="form-group col">
                            <label class="control-label" for="concepto">{{'concepto:'}}</label>
                            <input class="form-control {{ $errors->has('concepto')?'is-invalid':'' }}" type="text" name="concepto" id="concepto" value="{{ isset($concepto->concepto)?$concepto->concepto:old('concepto') }}">
                        
                            {!! $errors->first('concepto','<div class="invalid-feedback">:message</div>') !!}
                        
                        </div>
                        <div class="form-group col">

                            <label class="control-label" for="costo">{{'Costo:'}}</label>
                            <input  class="form-control {{ $errors->has('costo')?'is-invalid':''}}" type="text" name="costo" id="costo" value="{{ isset($concepto->costo)?$concepto->costo:old('costo') }}" >

                            {!! $errors->first('costo','<div class="invalid-feedback">:message</div>') !!}

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