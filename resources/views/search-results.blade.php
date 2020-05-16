@extends('layouts/layout')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/landing-page.css') }}" />
@endsection

@section('content')
  <div id="contenedor">      
    <div class="content_productos">
      @foreach($productos as $lista)
        <div class="panel_product border">
          <a href="{{ route('shop.show',  $lista['id']) }}">
            <div class="panel_product_img ">
              <div class="product_img">
                <img src="{{ asset( '/storage/'. $lista['image']) }}">
              </div>
            </div>
            <div class="panel_product_info ">
              <div class="product_info">
                <div class="product-name">{{ $lista['nombre'] }}</div>
                <div class="product-precio">${{ $lista['precio'] }}</div>
              </div>                   
            </div>                 
          </a>
        </div>
        <script type="text/javascript">
          
        </script>
      @endforeach                       
    </div>       
  </div>
@endsection