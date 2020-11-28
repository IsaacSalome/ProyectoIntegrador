<?php

namespace App\Http\Controllers;
use App\Models\conceptos;
use App\Models\Alumnos;
use App\Models\vistaPagos;
use App\Models\Empleados;
use App\Models\pagosA;
use Illuminate\Http\Request;

class PagosAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagos=vistaPagos::paginate(5);
  
        return view('pagosA.index',compact('pagos'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos = alumnos::all();

        $conceptos = conceptos::all();

        return view('pagosA.create', compact('alumnos','conceptos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos=$request->except('_method','_token');
        pagosA::insert($datos);
        return redirect('pagosA')->with('Mensaje','pago agregado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pagosA  $pagosA
     * @return \Illuminate\Http\Response
     */
    public function show(pagosA $pagosA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pagosA  $pagosA
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pagosA)
    {
        
        $pago = pagosA::findOrFail($id_pagosA);
        $alumnos = alumnos::all();

        $conceptos = conceptos::all();
        return view('pagosA.edit',compact('pago','alumnos','conceptos'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pagosA  $pagosA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pagosA)
    {

          $datos=$request->except('_method','_token');
          
          pagosA::where('id_pagosA','=',$id_pagosA)->update($datos);
          
          $concepto = pagosA::findOrFail($id_pagosA);
          
          return redirect('pagosA')->with('Mensaje','Pago modificado con éxito');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pagosA  $pagosA
     * @return \Illuminate\Http\Response
     */
    public function destroy($pagosA)
    {
        $pagoA=pagosA::findOrFail($pagosA);

        pagosA::destroy($pagosA);

        return redirect('/pagosA')->with('Mensaje','Pago Eliminado con éxito');
    }
}
