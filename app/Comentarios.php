<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $guarded=[]; //Levantamos la proteccion de campos en las tablas (Esto sirve para que se puedan meter todos los campos sin decirle uno especifico)
    protected $table='comentarios'; //Para indicar un nombre de tabla distinto al de la convención modelo-tabla de Laravel

    // pertenecen a un usuario
    public function usuario(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    // pertenecen a un post
    public function post(){
        return $this->belongsTo(Posts::class,'posts_id','id');
    }
}
