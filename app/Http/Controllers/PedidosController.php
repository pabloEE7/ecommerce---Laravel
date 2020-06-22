<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function pedidosTotales()
    {
    	return view('pedidos.totales');
    }

    public function pedidosActuales()
    {
    	return view('pedidos.actuales');
    }
}
