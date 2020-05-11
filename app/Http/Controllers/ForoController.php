<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foro;
use App\Temas;

class ForoController extends Controller
{
    public function index()
    {
        $foros=Foro::all();
        return view('',compact('foros'));
    }
    public function foro($id)
    {
        $foro=Temas::where('id_foro', $id)->get();
        return view('',compact('foro'));
    }
}
