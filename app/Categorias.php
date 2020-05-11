<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $guarded=[]; //Levantamos la proteccion de campos en las tablas (Esto sirve para que se puedan meter todos los campos sin decirle uno especifico)
    protected $table='categorias'; //Para indicar un nombre de tabla distinto al de la convención modelo-tabla de Laravel

    //Pertenecen a muchos posts
    public function posts() {
        return $this->belongsToMany(User::class, 'cat_posts', 'cat_id','posts_id'); //Se crea una tabla intermedia entre categorias y posts
    }
}
