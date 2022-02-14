@extends('layouts.myapp')

@section('content')
<div class="container">
  <h3>Tu carrito</h3>
  <div class="alert alert-primary clearfix" role="alert">
   <strong>Envio gratis apartir de $499</strong>  <a href="{{route('entrega')}}"><button  class="btn btn-primary float-end">Pagar</button></a>
  </div>
   @if (empty(session('carrito')))
  <br>
    <div class="card-body">
      <h5 class="card-title">Tu carrito esta vacio</h5>
      <p class="card-text">Navega por nombre de la tienda y agrega los productos que buscas.</p>
      <a href="{{route('welcome')}}" class="btn btn-primary">Seguir comprando</a>
    </div>
    <br>
    <h5>Te recomendamos</h5>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="https://th.bing.com/th/id/OIP.QezWoHjmvzf0D16MZrFecQHaE7?pid=ImgDet&rs=1" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://th.bing.com/th/id/OIP.QezWoHjmvzf0D16MZrFecQHaE7?pid=ImgDet&rs=1" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://th.bing.com/th/id/OIP.QezWoHjmvzf0D16MZrFecQHaE7?pid=ImgDet&rs=1" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://th.bing.com/th/id/OIP.QezWoHjmvzf0D16MZrFecQHaE7?pid=ImgDet&rs=1" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>

 @else
  <?php 
  $carritos = session('carrito');
   ?>

  <div class="row">
    <div class="col align-self-start">
      <strong>Producto</strong>
    </div>
     <div class="col align-self-end">
       <strong>Precio unitario</strong>
    </div>
     <div class="col align-self-end">
    <strong>Cantidad</strong> 
    </div>
     <div class="col align-self-end">
      <strong>Total</strong> 
    </div>
  </div>
  @foreach ($carritos as $carrito)
  

  <div class="row  border-top">
    <div class="col align-self-start">
    <img src="https://th.bing.com/th/id/OIP.QezWoHjmvzf0D16MZrFecQHaE7?pid=ImgDet&rs=1" style="width: 50px; height: 50px;">
   <br>
     {{$carrito->idproduct}} <br>
     {{$carrito->size}} <br>
      <a href="#">Editar talla</a> <a href="#">Elimiar</a>
    </div>
 
     <div class="col align-self-end">
      {{$carrito->price}}
    </div>
     <div class="col align-self-end">
      {{$carrito->quantity}}
    <!--  <input type="number" name="cantidad" value="1" style="width: 50px;"> -->
    </div>
     <div class="col align-self-end">
    $900
    </div>
  </div>

  <br> <br>
    @endforeach
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Compra segura</h5>
        <p class="card-text">Necesitas ayuda? llamanos 7474674674</p>
       
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card"> <center>
      <div class="card-body">
        <h5 class="card-title">Resumen de compra</h5>
        <p class="card-text">sub total: $8,999</p>
        <p class="card-text" style="color:green;">¡Envio gratis!  0</p>
        <p class="card-text"><strong>Total de contado:  $8,999</strong></p>
        <a href="{{route('entrega')}}" class="btn btn-primary" style="width: 100%;">Pagar</a>
        <a href="{{url('/')}}" >Seguir comprando</a></center>
      </div>
    </div>
  </div>
</div>
</div>
@endif
@endsection
