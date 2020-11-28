<?php

namespace App\Http\Controllers;

use App\Models\pagosE;
use Illuminate\Http\Request;
use App\Models\vistaPagosE;
use DB;
use App\Models\Empleados;

class PagosEController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagos=vistaPagosE::paginate(5);
  
        return view('pagosE.index',compact('pagos'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = Empleados::all();

        return view('pagosE.create', compact('empleados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos=array_values($request->except('_method','_token'));
        
        DB::select('call Registrar_pago(?,?,?)', $datos);
        
        return redirect('pagosE')->with('Mensaje', 'Pago agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pagosE  $pagosE
     * @return \Illuminate\Http\Response
     */
    public function show(pagosE $pagosE)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pagosE  $pagosE
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pagosE)
    {

        $empleados = Empleados::all();
        $pago = pagosE::findOrFail($id_pagosE);

        return view('pagosE.edit', compact('empleados','pago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pagosE  $pagosE
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pagosE $pagosE)
    {
        $datos=array_values($request->except('_method','_token'));
        
        DB::select('call Actualizar_pago(?,?,?,?)', $datos);
        
        return redirect('pagosE')->with('Mensaje', 'Pago modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pagosE  $pagosE
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pagosE)
    {
        $pago=pagosE::findOrFail($id_pagosE);

        pagosE::destroy($id_pagosE);

        return redirect('/pagosE')->with('Mensaje','pago Eliminado con éxito');

    
    }
}
