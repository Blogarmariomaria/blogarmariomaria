<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentarios;

class ComentariosController extends Controller
{
    
    public function nuevo()
    {
        return view('');
    }
    public function editar($id)
    {
        $comentario=Comentarios::find($id); //Encuentra solo una
        return view('',compact('comentario'));
    }
    public function crear()
    {
        Comentarios::create([
            'comentario' => request(''),//nombre del input del formulario
            'user_id' => request(''),
            'posts_id' => request('')
        ]);
        return back();
    }
    public function actualizar()
    {
        Comentarios::where('id', request('id'))->update([
            'comentario' => request(''),//nombre del input del formulario
            'user_id' => request(''),
            'posts_id' => request('')
        ]);
        return back();
    }
    public function eliminar()
    {
        Comentarios::where('id', request('id'))->delete();
        return back();
    }
}
