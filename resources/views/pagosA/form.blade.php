{{ $modo=='crear' ? ' ': 'Modificar Alumno'}} 
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

                        <div class="form-group col-md-6">
                            <label for="id_Estudiantes">alumno</label>
                            <select class="form-control" name="id_Estudiantes" id="id_Estudiantes">
                            @foreach($alumnos as $alumno)
                            <option value=" {{ isset($alumno->id_Estudiantes)?$alumno->id_Estudiantes:old('id_Estudiantes')}} " required>{{ $alumno->nombre }} {{ $alumno->apellidoPaterno }} {{ $alumno->apellidoMaterno }}</option>
                            @endforeach
                            </select>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="id_concepto">Concepto</label>
                            <select class="form-control" name="id_concepto" id="id_concepto">
                            @foreach($conceptos as $concepto)
                            <option value=" {{ isset($concepto->id_concepto)?$concepto->id_concepto:old('id_concepto')}} " required>{{ $concepto->concepto }} {{ $concepto->costo }}</option>
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
</div>


    <input  type="submit" class="btn btn-success" value="{{ $modo=='crear' ? 'Agregar': 'Modificar'}}">

    <a class="btn btn-danger" href="{{ url('pagosA') }}">Cancelar</a>