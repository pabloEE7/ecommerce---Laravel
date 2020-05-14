@extends('layouts/layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}" />
@endsection

@section('content')

<div class="content_">
	<div class="panel_global">
		@if(!session('cart'))
	        <p>no hay elementos en el carrito</p>
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
	            	<div class="content_item row pt-4">
	            		<div class="col-6 d-flex">
	            			<div class="item_img w-25">
	            				<p>imagen</p>
	            			</div>
	            			<div class="w-25">
	            				<p>{{ $lista['nombre']}}</p>
	                            <p>precio por unidad</p>
	            			</div>	                        	            			
	            		</div>
	            		<div class="col-6 d-flex  justify-content-end">
	            			
	            				<p class="item_precio">precio</p>
	                            <a href="{{ route('cart.delete', $lista['id']) }}" class="boton-delete btn btn-danger rounded-0">x</a>                        
	            		</div>	            			        
	            	</div>
	                 @endforeach 
	                <div class="content_botones m-auto">
	                	<button class="btn button rounded-0 mt-5">Continuar comprando</button>
	                	<button class="btn botones_compra button-primary rounded-0 mt-5">Procesar compra</button>
                    </div>                      	
	            </div>
	            </div> 	        	
	        </div>
	    @endif
	</div>	
</div>

@endsection

@section('js')

@endsection