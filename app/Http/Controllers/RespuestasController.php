<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Respuestas;

class RespuestasController extends Controller
{
    public function nuevo()
    {
        return view('');
    }
    public function editar($id)
    {
        $respuesta=Respuestas::find($id); //Encuentra solo una
        return view('',compact('respuesta'));
    }
    public function crear()
    {
        Respuestas::create([
            'respuesta' => request(''),//nombre del input del formulario
            'id_tema' => request(''),
            'user_id'=>request('')
        ]);
        return back();
    }
    public function actualizar()
    {
        Respuestas::where('id', request('id'))->update([
            'respuesta' => request(''),//nombre del input del formulario
            'id_tema' => request(''),
            'user_id'=>request('')
        ]);
        return back();
    }
    public function eliminar()
    {
        Respuestas::where('id', request('id'))->delete();
        return back();
    }
}
