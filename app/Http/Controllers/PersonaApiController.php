<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaApiController extends Controller
{
    public function showByNumeroDocumento($numeroDocumento, Request $request){
        $persona = Persona::select('nombre', 'tipoDocumento', 'numeroDocumento', 'ubigeo', 'sexo', 'apellidoPaterno', 'apellidoMaterno', 'nombres')->Selectdraw('DATE_FORMAT(fechaNacimiento,"%d/%m/%Y") as fechaNacimiento')->where('numeroDocumento',$numeroDocumento)->first();
        return response()->json($persona);
    }
}
