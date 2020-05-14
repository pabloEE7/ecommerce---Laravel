<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Productos;
use App\Images;

class LandingPageController extends Controller
{
    //
    public function index(){

    	$productos = Productos::all();
    	return view('landing-page', array(
        	    'productos' => $productos 
            )
        );  	
    }
}
