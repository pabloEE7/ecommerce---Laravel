<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias'; // nombre de la tabla

    public function categorias(){
    	return $this->hasMany('App\Productos'); //relacion de 1 a muchos, va a sacar todos los productos de esa categoria
    }
}
