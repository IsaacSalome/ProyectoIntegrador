<?php

namespace App\Http\Controllers;
use App\Models\puestos;
use Illuminate\Support\Facades\Storage;


use App\Models\Empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['empleados']=Empleados::paginate(5);
        return view('empleados.index',$datos);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['puestos']=puestos::paginate(5);

        return view('empleados.create', compact('empleado','puestos'));
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
            'nombre' => 'required|string|max:100',
            'apellidoPaterno'=> 'required|string|max:100',
            'apellidoMaterno'=> 'required|string|max:100',
            'sexo'=> 'required|string|max:100',
            'edad'=> 'required|integer',
            'calle'=> 'required|string|max:100',
            'numeroInterior'=> 'required|integer',
            'numeroExterior'=> 'required|integer',
            'codigoPostal'=> 'required|string|max:5',
            'localidad'=> 'required|string|max:100',
            'correo'=> 'required|email',
            'telefono'=> 'required|string|max:10',
            'curp'=> 'required|string|max:100',
            'rfc'=> 'required|string|max:100',
            'id_puesto'=> 'required|string|max:100',

            'foto'=> 'required|max:1000|mimes:jpeg,png,jpg'

        ];

        $Mensaje=["required" => 'El :attribute es requerido'];

        $this->validate($request, $campos, $Mensaje);

        $datos=$request->except('_method','_token');

        if($request->hasFile('foto')){
            $datosAlumno['foto']=$request->file('foto')->store('uploads','public');
        }

        Empleados::insert($datos);

        return redirect('empleados')->with('Mensaje','Concepto agregado con éxito');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id_Empleeados)
    {
        $empleado = Empleados::findOrFail($id_Empleeados);
        $puestos = puestos::all();

        return view('empleados.edit',compact('empleado','puestos'));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_Empleeados)
    {
    $campos=[
            'nombre' => 'required|string|max:100',
            'apellidoPaterno'=> 'required|string|max:100',
            'apellidoMaterno'=> 'required|string|max:100',
            'sexo'=> 'required|string|max:100',
            'edad'=> 'required|integer',
            'calle'=> 'required|string|max:100',
            'numeroInterior'=> 'required|integer',
            'numeroExterior'=> 'required|integer',
            'codigoPostal'=> 'required|string|max:5',
            'localidad'=> 'required|string|max:100',
            'correo'=> 'required|email',
            'telefono'=> 'required|string|max:10',
            'curp'=> 'required|string|max:100',
            'rfc'=> 'required|string|max:100',
            'id_puesto'=> 'required|string|max:100',

            'foto'=> 'required|max:1000|mimes:jpeg,png,jpg'

        ];
        if($request->hasFile('foto')){

            $campos+=['foto'=> 'required|max:1000|mimes:jpeg,png,jpg'];
       
        }


        $Mensaje=["required" => 'El :attribute es requerido'];

        $this->validate($request, $campos, $Mensaje);

        $datos=$request->except('_method','_token'); 
        if($request->hasFile('foto')){

            $empleado=Empleados::findOrFail($id_Empleeados);
            
            Storage::delete(['public/'.$empleado->foto]);
            

            $datos['foto']=$request->file('foto')->store('uploads','public');
        }
        
        Empleados::where('id_Empleados','=',$id_Empleeados)->update($datos);
      
        $datos = Empleados::findOrFail($id_Empleeados);

        return redirect('empleados')->with('Mensaje','Empleado modificado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id_Empleeados)
    {
        $empleado=Empleados::findOrFail($id_Empleeados);
        if(Storage::delete('public/'.$empleado->foto)){
            Empleados::destroy($id_Empleeados);
        }
        return redirect('/empleados')->with('Mensaje','Empleado Eliminado con éxito');

    }
}
