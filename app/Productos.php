<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos'; // nombre de la tabla

    public function categorias(){ //saca el objeto que esta relacionado con la tabla
    	return $this->belongsTo('App\Categorias', 'id_categoria'); //relacion de muchos a 1
    }

    public function images(){ //saca el objeto que esta relacionado con la tabla
    	return $this->belongsTo('App\Images', 'id_image'); //relacion de muchos a 1

    }
}
