<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Categorias;
use App\Productos;
use App\Images;

// SDK de Mercado Pago
require __DIR__ .  '/../../../mercadoPago/vendor/autoload.php';



class CartController extends Controller
{
    //
    public function index(){
    	return  view('cart');
    }

    public function store(Request $request){

        if (empty($request)) {
            return  view('cart');
        }

        $id = $request->input('id');
        $cantidad = $request->input('cantidad');
        $precio_u = $request->input('precio_u');
        $precio = $request->input('precio');      

        $productos = Productos::find($id);
        $images = Images::where('id_image_pruduct', $productos->id_image)->get();
        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [
                $id => [
                    'id' => $id,
                    'image' => $images[0]->nombre, 
                    'nombre' => $productos->nombre,
                    'precio_u' => $precio_u,                   
                    'cantidad' => $cantidad,
                    'precio' => $precio
                ]
            ];
            session()->put('cart', $cart);

            return redirect(route('cart.index') )->with('success','1');         
        }

        $cart[$id] = [
            'id' => $id,
            'image' => $images[0]->nombre,
            'nombre' => $productos->nombre,
            'precio_u' => $precio_u,
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

    public function pay_cart(Request $request)
    {

        $cart = $request->session()->get('cart');
        $array = [];

        // Agrega credenciales
        \MercadoPago\SDK::setAccessToken(
            'TEST-1492222152862518-051723-4e2a7903df879399d31edbf1a6ca7cb3-245258758'
        );
        $preference = new \MercadoPago\Preference();  

        foreach ($cart as $lista) {

            $item = new \MercadoPago\Item();
            
            $item->title = $lista['nombre'];
            $item->quantity =  $lista['cantidad'];
            $item->unit_price =  $lista['precio_u'];

            array_push($array, $item);        
        }
        
        $preference->items = $array;

        $preference->save();
                  
        return view('pay_cart', array('preference_id' => $preference->id));
    }

    public function pay(Request $request)
    {
        
    }

}
