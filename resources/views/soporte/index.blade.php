@extends('layouts.app')


@section('content')

<div class="container">
<h1 align="center">Bienvenido a soporte</h1>
<h2 align="center">¿En qué te podemos ayudar?</h2>
<h3>Preguntas frecuentes</h3>

<div id="accordion" role="tablist">
  <div class="card card-collapse">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          1.	¿Qué submenús puedo encontrar en la opción empleados?          <i class="material-icons">keyboard_arrow_down</i>
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        En la opción empleados, se despliegan los submenús de registrar un empleado y de generar un nuevo puesto.       </div>
    </div>
  </div>
  <div class="card card-collapse">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          2.	¿Qué submenús puedo encontrar en la opción pagos de alumnos?
                    <i class="material-icons">keyboard_arrow_down</i>
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        En la opción pagos de alumnos, se despliegan los submenús de registrar un pago y de generar un concepto de pago. 
            </div>
    </div>
  </div>
  <div class="card card-collapse">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          3.	¿A qué parte del sistema me dirijo para cerrar sesión?
                    <i class="material-icons">keyboard_arrow_down</i>
        </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        En el icono de usuario en la esquina superior derecha para desplegar la opción de cerrar sesión.      </div>
    </div>
  </div>

  <div class="card card-collapse">
    <div class="card-header" role="tab" id="headingFour">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          4.	¿Cómo Aquapp hace más fácil la gestión?
                    <i class="material-icons">keyboard_arrow_down</i>
        </a>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
        •	Puede llevar un mejor control en cuanto a los datos de clientes inscritos.
•	Le permite llevar un control de empleados.
•	Puede gestionar los pagos de clientes.
•	Y además puede controlar los salarios a empleados. 
 
            </div>
    </div>
  </div>

  <div class="card card-collapse">
    <div class="card-header" role="tab" id="headingFive">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          5.	¿Qué ahorros aporta AquApp?
                    <i class="material-icons">keyboard_arrow_down</i>
        </a>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body">
        •	El acceso remoto al funcionamiento de AquApp ahorra tiempo en su instalación.
•	El registro de datos y la presentación del resumen de la información aumenta la eficiencia.
•	Se ahorran los costes en infraestructura informática.

            </div>
    </div>
  </div>


  <div class="card card-collapse">
    <div class="card-header" role="tab" id="headingSix">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          6.	¿Cuáles son las ventajas de utilizar AquApp?
                    <i class="material-icons">keyboard_arrow_down</i>
        </a>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body">
        •	Optimización del proceso de inscripción.
•	Obtención de un control más efectivo de las actividades de la organización.
•	Monitorización de las operaciones que se manejan dentro de las escuelas de natación.
•	Acceso constante a toda la información registrada.
•	Agregación instantánea de datos.
•	Incrementación de la efectividad en las operaciones propias de las escuelas de natación.
•	Obtención de una planificación operativa.

            </div>
    </div>
  </div>

  <div class="card card-collapse">
    <div class="card-header" role="tab" id="headingSeven">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          7.	¿Qué módulos ofrece el software AquApp?                    <i class="material-icons">keyboard_arrow_down</i>
        </a>
      </h5>
    </div>
    <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordion">
      <div class="card-body">
        •	Alumnos
•	Empleados
•	Registrar
•	Generar puesto
•	Pagos de alumnos
•	Registrar un pago
•	Generar concepto
•	Pagos de empleados 
 
            </div>
    </div>
  </div>


  <div class="card card-collapse">
    <div class="card-header" role="tab" id="headingEight">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
          8.	¿Cómo puedo dar de alta un alumno o un empleado?
                    <i class="material-icons">keyboard_arrow_down</i>
        </a>
      </h5>
    </div>
    <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight" data-parent="#accordion">
      <div class="card-body">
        Para el agregado de un registro nuevo, sólo basta con dar clic sobre el botón agregar alumnos o agregar empleados. 
            </div>
    </div>
  </div>

  <div class="card card-collapse">
    <div class="card-header" role="tab" id="headingNine">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
          9.	¿Cómo puedo dar de baja a un alumno o un empleado?
                    <i class="material-icons">keyboard_arrow_down</i>
        </a>
      </h5>
    </div>
    <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine" data-parent="#accordion">
      <div class="card-body">
        Para la eliminación de un alumno o un empleado, sólo basta con dar clic en el botón borrar, posteriormente se necesita una confirmación por medio de una ventana emergente.
            </div>
    </div>
  </div>

  <div class="card card-collapse">
    <div class="card-header" role="tab" id="headingTen">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
          10.	 ¿Qué puedo hacer en caso de que tenga un fallo de conexión?
                    <i class="material-icons">keyboard_arrow_down</i>
        </a>
      </h5>
    </div>
    <div id="collapseTen" class="collapse" role="tabpanel" aria-labelledby="headingTen" data-parent="#accordion">
      <div class="card-body">
        •	Verifica que no haya errores de tipeo en la dirección web.
        •	Comprueba que tu conexión a Internet funcione correctamente. Si tu conexión a Internet es inestable, obtén más información sobre cómo solucionar los problemas de estabilidad de Internet.
        •	Comunícate con el propietario del sitio web.
        
            </div>
    </div>
  </div>

</div>
<br>


<div class="card card-nav-tabs">
  <div class="card-header card-header-success">
    <center>Contacto con Soporte</center>
  </div>
  <div class="card-body">
    @include('soporte.email')

    </blockquote>
  </div>
</div>

@endsection
