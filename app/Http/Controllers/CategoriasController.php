<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;

class CategoriasController extends Controller
{
    public function nuevo()
    {
        return view('');
    }
    public function editar($id)
    {
        $categoria=Categorias::find($id); //Encuentra solo una
        return view('',compact('categoria'));
    }
    public function crear()
    {
        Categorias::create([
            'categoria' => request('')
        ]);
        return back();
    }
    public function actualizar()
    {
        Categorias::where('id', request('id'))->update([
            'categoria' => request('')
        ]);
        return back();
    }
    public function eliminar()
    {
        Categorias::where('id', request('id'))->delete();
        return back();
    }
}
