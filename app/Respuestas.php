<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    protected $guarded=[]; //Levantamos la proteccion de campos en las tablas (Esto sirve para que se puedan meter todos los campos sin decirle uno especifico)
    protected $table='respuestas'; //Para indicar un nombre de tabla distinto al de la convención modelo-tabla de Laravel

    //pertenecen a un usuario
    public function usuario()
    {
        return $this->belongsTo(User::class,'user_id' ,'id');
    }
    //pertenece a un tema
    public function tema(){
        return $this->belongsTo(Temas::class,'id_tema','id');
    }
}
