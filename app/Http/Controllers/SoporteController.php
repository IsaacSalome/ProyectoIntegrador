<?php

namespace App\Http\Controllers;

use App\Models\soporte;
use Illuminate\Http\Request;

class SoporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('soporte.index');     
    }

    public function getDownload()
    {
           //PDF file is stored under project/public/download/info.pdf
           $file= public_path(). "/Manual/Manual.pdf";
 
            return response()->download($file);

    }

}
