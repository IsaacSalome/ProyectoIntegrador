<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Models\tutores;
use DB;
use Illuminate\Support\Arr;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['alumnos']=Alumnos::paginate(5);
        return view('alumnos.index',$datos);     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'Nombre' => 'required|string|max:100',
            'apellidoPaterno'=> 'required|string|max:100',
            'apellidoMaterno'=> 'required|string|max:100',
            'edad'=> 'required|integer',
            'calle'=> 'required|string|max:100',
            'numeroInterior'=> 'required|integer',
            'numeroExterior'=> 'required|integer',
            'codigoPostal'=> 'required|string|max:5',
            'localidad'=> 'required|string|max:100',
            'correo'=> 'required|email',
            'telefono'=> 'required|string|max:10',
            'nombredeltutor' => 'required|string|max:100',
            'apellidoPaternodeltutor'=> 'required|string|max:100',
            'apellidoMaternodeltutor'=> 'required|string|max:100',
            'edaddeltutor'=> 'required|integer',
            'sexodeltutor'=> 'required|string|max:100',
            'parentesco'=> 'required|string|max:100',
            'telefonodeltutor'=> 'required|string|max:10',
            'foto'=> 'required|max:1000|mimes:jpeg,png,jpg'

        ];

        $Mensaje=["required" => 'El :attribute es requerido'];
        $this->validate($request, $campos, $Mensaje);
       // $datosAlumno= request()->all();

        $datosAlumno=array_values($request->except('_method','_token'));
      //  Alumnos::Insertar_Alumno($datosAlumno);
        if($request->hasFile('foto')){
            $datosAlumno['18']=$request->file('foto')->store('uploads','public');
        }
       // 
       // alumnos::insert($datosAlumno);
     DB::select('call Registrar_alumnos(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',$datosAlumno);

        return redirect('alumnos')->with('Mensaje','Alumno agregado con éxito');//  //response()->json($datosAlumno);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function show(Alumnos $alumnos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function edit($id_Estudiantes)
    {
        $alumno = Alumnos::findOrFail($id_Estudiantes);
        $tutores = tutores::findOrFail($id_Estudiantes);
        return view('alumnos.edit',compact('alumno','tutores'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_Estudiantes)
    {
        $campos=[
            'Nombre' => 'required|string|max:100',
            'apellidoPaterno'=> 'required|string|max:100',
            'apellidoMaterno'=> 'required|string|max:100',
            'edad'=> 'required|integer',
            'calle'=> 'required|string|max:100',
            'numeroInterior'=> 'required|integer',
            'numeroExterior'=> 'required|integer',
            'codigoPostal'=> 'required|string|max:5',
            'localidad'=> 'required|string|max:100',
            'correo'=> 'required|email',
            'telefono'=> 'required|string|max:10',
            'nombredeltutor' => 'required|string|max:100',
            'apellidoPaternodeltutor'=> 'required|string|max:100',
            'apellidoMaternodeltutor'=> 'required|string|max:100',
            'edaddeltutor'=> 'required|integer',
            'sexodeltutor'=> 'required|string|max:100',
            'parentesco'=> 'required|string|max:100',
            'telefonodeltutor'=> 'required|string|max:10',

        ];

        if($request->hasFile('foto')){

            $campos+=['foto'=> 'required|max:1000|mimes:jpeg,png,jpg'];
       
        }

        $Mensaje=["required" => 'El :attribute es requerido'];
        
        $this->validate($request, $campos, $Mensaje);
        $datosAlumno=array_values($request->except(['_token','_method']));

        if($request->hasFile('foto')){

            $alumno=Alumnos::findOrFail($id_Estudiantes);
            
            Storage::delete(['public/'.$alumno->foto]);
            

            $datosAlumno['19']=$request->file('foto')->store('uploads','public');
        }
      //  $datosAlumno=array_values($request->except(['_token','_method']));

     //   Alumnos::where('id_Estudiantes','=',$id_Estudiantes)->update($datosAlumno);
     DB::select('call Modificar_alumnos(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',$datosAlumno);
 
    //    $alumno=Alumnos::findOrFail($id_Estudiantes);
        return redirect('alumnos')->with('Mensaje', 'Alumno Modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_Estudiantes)
    {

        $alumno=Alumnos::findOrFail($id_Estudiantes);

        if(Storage::delete('public/'.$alumno->foto)){
            Alumnos::destroy($id_Estudiantes);
        }

        return redirect('/alumnos')->with('Mensaje','Alumno Eliminado con éxito');
    }
}
