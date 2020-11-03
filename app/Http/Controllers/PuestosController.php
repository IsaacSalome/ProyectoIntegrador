<?php

namespace App\Http\Controllers;

use App\Models\puestos;
use Illuminate\Http\Request;

class PuestosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['puestos']=puestos::paginate(5);
        return view('puestos.index',$datos);       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('puestos.create');
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
            'puesto' => 'required|string|max:100',
            'salarioBase'=> 'required|string',
            'horasTrabajo'=> 'required|integer',  ]; 

            $Mensaje=["required" => 'El :attribute es requerido'];
            $this->validate($request, $campos, $Mensaje);
           // $datosAlumno= request()->all();
    
            $datosPuesto=$request->except('_method','_token');

            puestos::insert($datosPuesto);

          return redirect('puestos')->with('Mensaje','puesto agregado con éxito');//  //response()->json($datosAlumno);

    }        /** 
     * Display the specified resource.
     *
     * @param  \App\Models\puestos  $puestos
     * @return \Illuminate\Http\Response
     */
    public function show(puestos $puestos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\puestos  $puestos
     * @return \Illuminate\Http\Response
     */
    public function edit($id_puesto)
    {
        $puesto = puestos::findOrFail($id_puesto);
        return view('puestos.edit',compact('puesto'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\puestos  $puestos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_puesto)
    {
        $campos=[
            'puesto' => 'required|string|max:100',
            'salarioBase'=> 'required|string',
            'horasTrabajo'=> 'required|integer',  ]; 

            $Mensaje=["required" => 'El :attribute es requerido'];
            $this->validate($request, $campos, $Mensaje);    
            $datosPuesto=$request->except('_method','_token');

            puestos::where('id_puesto','=',$id_puesto)->update($datosPuesto);
            $puesto= puestos::findOrFail($id_puesto);
            

            return redirect('puestos')->with('Mensaje', 'puesto Modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\puestos  $puestos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_puesto)
    {
        $puesto = puestos::findOrFail($id_puesto);
        puestos::destroy($id_puesto);
    return redirect('puestos');
    }
}
