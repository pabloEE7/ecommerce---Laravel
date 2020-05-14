@extends('layouts/layout')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/shop.css') }}" />
@endsection

@section('content')
  <div class="content_">
    <div class="content_blogal">
        <div class=" row">
            <div class=" col-md-6">
                <div class="content_image_select">
                    <div class="image_select">
                      <img src="{{ asset( '/storage/'. $imagenes[0]->nombre) }}" class="img-fluid rounded d-block" id="currentImage">
                    </div>
                </div>
                <div class="content_images">
                  @foreach($imagenes as $lista)                
                    <div class="images product-section-thumbnail">
                      <img src="{{ asset( '/storage/'. $lista->nombre) }}" class="img-fluid rounded d-block">
                    </div>
                  @endforeach
                </div>
                
            </div>
            
            <div class="panel_ col-md-6 pb-4">
                <div class="panel_product col-11 ">
                    <h1>{{ $productos->nombre }}</h1>
                      <form action="{{ action('CartController@store') }}" method="GET">             
                        <label class="precio">$<i id="shop_precio">{{ $productos->precio }}</i></label>
                        <div class="">
                            <div class="form-group form-inline">
                                
                                <label for="shop_cantidad">Cantidad</label>
                                <input type="text" name="cantidad"  id="shop_cantidad" class="form-control ml-2" value="1" style="width: 70px; text-align: center;">                    
                            </div>
                        </div>                    
                        <div class="botones_pago row">
                               
                        </div>                    

                      <input type="hidden" name="precio" id="shop_precio_input" class="" value="{{ $productos->precio }}">
                      <input type="hidden" name="id" value="{{ $productos->id }}">
                      <input type="submit" value="Agregar al carrito" class="button button-plain">
                    </form> 
                    
                    


                    
                                     
                </div>                  
            </div>
        </div>
      <hr class=""> 
      <div>
        <h3>Descripcion</h3>
      </div>        
    </div>
  </div>
@endsection

@section('js')
  <script type="text/javascript">
   
    $("#shop_cantidad").on("keyup", function() {

        let precio = "{{ $productos->precio }}";
        let cantidad = $("#shop_cantidad").val();
            
        if (cantidad == "" || cantidad == 0){

            $('#shop_precio').html("{{ $productos->precio }}");
        $('#shop_precio_input').val("{{ $productos->precio }}");
                        
        }else{

            precio *= cantidad;

            $('#shop_precio').html(precio);
        $('#shop_precio_input').val(precio);
        }

    });

    $( "#shop_cantidad" ).blur(function() {

      let cantidad = $("#shop_cantidad").val();
      let cantidad_input = $("#shop_cantidad_input");

      if ( cantidad == "" || cantidad == 0) {

        $('#shop_cantidad').val(1);
        
      }
    });

    (function(){

      const currentImage = document.querySelector('#currentImage');
      const images = document.querySelectorAll('.product-section-thumbnail');
      images.forEach((element) => element.addEventListener('click', thumbnailClick));
      function thumbnailClick(e) {
        currentImage.src = this.querySelector('img').src;               
      }
    })();

  </script>
@endsection 
