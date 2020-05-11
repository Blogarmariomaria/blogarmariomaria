<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temas;
use App\Respuestas;


class TemasController extends Controller
{
    //Las respuestas de un tema 
    public function hilo($id)
    {
        $tema=Respuestas::where('id_tema', $id)->orderBy('id')->get();
        return view('',compact('tema'));
    }
    public function nuevo()
    {
        return view('');
    }
    public function editar($id)
    {
        $tema=Temas::find($id); //Encuentra solo una
        return view('',compact('tema'));
    }
    public function crear()
    {
        Temas::create([
            'titulo' => request(''),//nombre del input del formulario
            'id_foro' => request('')
        ]);
        return back();
    }
    public function actualizar()
    {
        Temas::where('id', request('id'))->update([
            'titulo' => request(''),//nombre del input del formulario
            'id_foro' => request('')
        ]);
        return back();
    }
    public function eliminar()
    {
        Temas::where('id', request('id'))->delete();
        return back();
    }
}
