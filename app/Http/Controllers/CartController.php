<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Categorias;
use App\Productos;

class CartController extends Controller
{
    //
    public function index(){
    	return view('cart');
    }

    public function store(Request $request){

    	$id = $request->input('id');
        $cantidad = $request->input('cantidad');
        $precio = $request->input('precio');

        $productos = Productos::find($id);
        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [
                $id => [
                    'id' => $productos->id,
                    'nombre' => $productos->nombre,
                    'cantidad' => $cantidad,
                    'precio' => $precio
                ]
            ];
            session()->put('cart', $cart);

            return redirect(route('cart.index') )->with('success','1');         
        }

        /*if (isset($cart[$id])) {
            $cart[$id] = [
            'id' => $productos->id,
            'nombre' => $productos->nombre,
            'cantidad' => $cantidad,
            'precio' => $precio
            ];
            session()->put('cart', $cart);
            return redirect(route('cart.index') )->with('success','1');
        }*/

        $cart[$id] = [
            'id' => $productos->id,
            'nombre' => $productos->nombre,
            'cantidad' => $cantidad,
            'precio' => $precio
        ];
        session()->put('cart', $cart);

        return redirect(route('cart.index') )->with('success','1');
    }



    public function deleteCart(Request $request, $id)
    {
        $cart = $request->session()->get('cart');
        
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect(route('cart.index') )->with('success','1');
    }

    public function deleteCartAll(Request $request)
    {
        $cart = $request->session()->get('cart');

        $request->session()->forget('cart');
        $request->session()->flush();
        
        return redirect(route('cart.index') )->with('success','1');
    }

    public function updateCart(Request $request, $id)
    {
        $cart = $request->session()->get('cart');
        
        unset($cart[$id]);
        session()->put('cart', $cart);
        return $cart;
    }

}
