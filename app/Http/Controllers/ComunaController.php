<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ComunaController extends Controller
{
    public function cargarComuna()
    {
        
       $comuna = DB::select('select idComuna, nombreComuna, ciudad_idCiudad from comuna where estado = 1');
       
       return json_encode($comuna);
    }
}
