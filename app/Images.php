<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images'; // nombre de la tabla

    public function images(){
    	return $this->belongsToMany('App\Productos'); //relacion de 1 a muchos, va a sacar todos los productos de esa categoria
    }
}
