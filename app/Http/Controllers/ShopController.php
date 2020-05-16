<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Categorias;
use App\Productos;
use App\Images;

class ShopController extends Controller
{
    //
    public function index(){}

    public function show($request = null){
    	if ($request) {
    		$product = Productos::where('id', $request)->firstOrFail();
            $images = Images::where('id_image_pruduct', 2)->get();
            
            $array = array(
                    'productos' => $product,
                    'imagenes' => $images
                );
    	    return view(
    	    	'shop', $array 
    	    	
            ); 
           		
    	}
    }
}

/*
$url = Storage::url('c.png');
*/
