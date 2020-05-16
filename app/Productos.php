<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Productos extends Model
{
	use Searchable;

    protected $table = 'productos'; // nombre de la tabla

    public function categorias(){ //saca el objeto que esta relacionado con la tabla
    	return $this->belongsTo('App\Categorias', 'id_categoria'); //relacion de muchos a 1
    }
}
