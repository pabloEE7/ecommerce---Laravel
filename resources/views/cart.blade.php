@extends('layouts/layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}" />
@endsection

@section('content')

<div class="content_">
	<div class="panel_global">
		@if(!session('cart'))
	        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
	        	<div class="alert alert-danger" role="alert">
                    El carrito esta vacio!
                </div>
	        </div>
	    @else	        
	        <div class="text-right">
	            <div class=" p-3">
	            	<form action="{{ action('CartController@deleteCartAll') }}" method="GET">
	            		<button type="buttom" class="btn btn-outline-dark p-4 rounded-0">Vaciar carrito</button>
	            	</form>	            	
	            </div>	            		
	        </div>
	        <div class="container">
	        	<div class="row pt-3 pb-3">
	            <div class="col-12">
	            	@foreach( session('cart') as $lista)
	            	<div class="content_item row pt-4 ">
	            		<div class="col-6 d-flex">
	            			<div class="item_img ">
	            				<img src="{{ asset( '/storage/'. $lista['image']) }}">
	            			</div>
	            			<div class=" pl-2 ">
	            				<p>{{ $lista['nombre']}}</p>
	                            <p>${{ $lista['precio_u']}} x{{ $lista['cantidad']}}</p>
	            			</div>	                        	            			
	            		</div>
	            		<div class="col-6 d-flex  justify-content-end">
	            			
	            			<p class="item_precio ">${{ $lista['precio']}}</p>
	            			<div class="item_delete">
	            				<a href="{{ route('cart.delete', $lista['id']) }}">x</a> 
	            			</div>	                                               
	            		</div>	            			        
	            	</div>
	                 @endforeach 
	                <div class="content_botones m-auto">
	                	<a  href="{{route('landing-page.index')}}">
	                	    <button class="btn button rounded-0 mt-5">Continuar comprando</button>
	                	</a>
	                	<button class="btn botones_compra button-primary rounded-0 mt-5">Procesar compra</button>
                    </div>                      	
	            </div>
	            </div> 	        	
	        </div>
	    @endif
	</div>	
</div>
@endsection