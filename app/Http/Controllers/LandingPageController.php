<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Productos;
use App\Images;

class LandingPageController extends Controller
{
	

    //
    public function index(Request $request){

        $array = []; 

        if (isset($request)) {

            $search = $request->input('search');            
            $productos = Productos::where('nombre', 'LIKE', "%".$search."%")->get();

            foreach ($productos as $product) {

                $images = Images::where('id_image_pruduct', $product->id_image )->get();

                $array[$product->id] = [
                'id' => $product->id,
                'nombre' => $product->nombre,
                'precio' => $product->precio,
                'image' => $images[0]->nombre
                ];
            }
            return view('search-results', array('productos' => $array) );
        }   

    	$productos = Productos::all();
    	foreach ($productos as $product) {

    		$images = Images::where('id_image_pruduct', $product->id_image )->get();

    		$array[$product->id] = [
    			'id' => $product->id,
    			'nombre' => $product->nombre,
    			'precio' => $product->precio,
    			'image' => $images[0]->nombre
    		];
    	}
    	return view('landing-page', array(
        	    'productos' => $array 
            )
        );  	
    }

    public function search(Request $request){

        
    }

}
