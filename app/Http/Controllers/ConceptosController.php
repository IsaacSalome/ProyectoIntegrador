<?php

namespace App\Http\Controllers;

use App\Models\conceptos;
use Illuminate\Http\Request;

class ConceptosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['conceptos']=conceptos::paginate(5);
        return view('conceptos.index',$datos);   
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conceptos.create');
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
            'concepto' => 'required|string|max:100',
            'costo'=> 'required|string'
    
          ];
          
          $Mensaje=["required" => 'El :attribute es requerido'];
          $this->validate($request, $campos, $Mensaje);
          $datos=$request->except('_method','_token');

          conceptos::insert($datos);

          return redirect('conceptos')->with('Mensaje','Concepto agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\conceptos  $conceptos
     * @return \Illuminate\Http\Response
     */
    public function show(conceptos $conceptos)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\conceptos  $conceptos
     * @return \Illuminate\Http\Response
     */
    public function edit($id_concepto)
    {
        $concepto = conceptos:: findOrFail($id_concepto);

        return view('conceptos.edit', compact('concepto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\conceptos  $conceptos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_concepto)
    {
      $campos=[
        'concepto' => 'required|string|max:100',
        'costo'=> 'required|string'

      ];
      $Mensaje=["required" => 'El :attribute es requerido'];

      $this->validate($request, $campos, $Mensaje);
      
      $datos=$request->except('_method','_token');
      
      conceptos::where('id_concepto','=',$id_concepto)->update($datos);
      
      $concepto = conceptos::findOrFail($id_concepto);
      
      return redirect('conceptos')->with('Mensaje','Concepto modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\conceptos  $conceptos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_concepto)
    {
        $puesto = conceptos::findOrFail($id_concepto);
        conceptos::destroy($id_concepto);
        return redirect('conceptos');
    }
}
