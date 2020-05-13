<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrutasController extends Controller
{
    public function getIndex(){
        return view('frutas.index')
        ->with('frutas',array('naranja','pera','sandia','fresa','melon'));
    }
    public function getNaranjas(){
        return 'Acción de naranjas';
    }
    public function anyPeras(/* $param1,$param2 */){
        return 'Accion de peras '/* .$param1.' '.$param2 */;
    }

    public function recibirFormulario(Request $request){
        $data = $request;

        return 'El nombre de la fruta es '.$request->input('nombre');
    }

}
