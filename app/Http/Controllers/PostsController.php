<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
    public function index()
    {
        $posts=Posts::all();
        return view('index',compact('posts'));
    }
    public function post($id)
    {
        $post=Posts::find($id)->with('users', 'categorias', 'comentarios');
        return view('', compact('post'));
    }
    public function nuevo()
    {
        return view('');
    }
    public function editar($id)
    {
        $post=Posts::find($id); //Encuentra solo una
        return view('',compact('post'));
    }
    public function crear()
    {
        Posts::create([
            'titulo' => request(''),//nombre del input del formulario
            'entrada' => request(''),
            'imagen' => request('')
        ]);
        return back();
    }
    public function actualizar()
    {
        Posts::where('id', request('id'))->update([
            'titulo' => request(''),//nombre del input del formulario
            'entrada' => request(''),
            'imagen' => request('')
        ]);
        return back();
    }
    public function eliminar()
    {
        Posts::where('id', request('id'))->delete();
        return back();
    }
}
