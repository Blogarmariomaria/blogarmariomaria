<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temas extends Model
{
    protected $guarded=[]; //Levantamos la proteccion de campos en las tablas (Esto sirve para que se puedan meter todos los campos sin decirle uno especifico)
    protected $table='temas'; //Para indicar un nombre de tabla distinto al de la convención modelo-tabla de Laravel

    //pertenece a un foro
    public function foro(){
        return $this->belongsTo(foro::class,'id_foro','id');
    }
}
