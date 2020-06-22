@extends('layouts.page')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}" />
@endsection

@section('content')
<div class="container p-5">
    <div class="row">
        <div class="content-general paneles-white sombra-1 titulos col-12 mt-5 text-center">
            <h3>Pedidos pendientes</h3>
        </div>
        <div class="col-log-6">
            <div class="content-general paneles-white sombra-1 titulos col-12  mt-5  text-center">
                <h3>Pedidos tomados</h3>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="content-general paneles-white sombra-1 titulos col-12  mt-5  text-center">
                <h3>Pedidos entregados</h3>
            </div>
        </div>
        
        <div class="content-general paneles-white sombra-1 titulos col-12  mt-5  text-center">
            <h3>Cadetes activos</h3>
        </div>
    </div>
</div>
@endsection
