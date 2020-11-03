<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $table = 'alumnos';

    protected $primaryKey = 'id_Estudiantes';




public static function Insertar_Alumno($datos=[]){
    $result = false;
    if (count($datos) > 0 ) {
        $result=\DB::statement('call Registrar_alumnos( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',$datos);
    }
    return $result;

}
 
}
