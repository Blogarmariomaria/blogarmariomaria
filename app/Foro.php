<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foro extends Model
{
    protected $guarded=[]; //Levantamos la proteccion de campos en las tablas (Esto sirve para que se puedan meter todos los campos sin decirle uno especifico)
    protected $table='foros'; //Para indicar un nombre de tabla distinto al de la convención modelo-tabla de Laravel

    //posee muchos temas
    public function tema() {
        return $this->hasMany(Temas::class, 'id_foro', 'id');//Se asocia con el modelo de la tabla que se relaciona mediante la pk de Foro y la fk de temas
    }
}
