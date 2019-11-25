@extends('layouts.master') 

@section('title')
 Shopping Cart
@endsection
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" 
  integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

@section('content')
<br></br> 
  @if(Session::has('cart')) <!--  Detecta si hay un carrito -->
   <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
       <ul class="list-group">
         @foreach($products as $product)
           <li class="list-group-item">
             <span class="badge">{{ $product['qty'] }}</span>
             <strong>{{ $product['item']['title'] }}</strong>
             <span class="label label-success">${{ $product['price'] }}</span>
             <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu"> <!--  Muestra las opciones, como reducir o quitar productos -->
    <a class="dropdown-item" href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">Quitar uno</a>
    <a class="dropdown-item" href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">Quitar todos</a>
</div>
           </li>
         @endforeach
       </ul>
      </div>
   </div>

   <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <strong>Total: {{ $totalPrice }}</strong>
      </div>
   </div>

   <hr></hr>
   <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <a href="{{ route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
      </div>
   </div>
  @else
  <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <h2>NO TIENES PRODUCTOS</h2>
      </div>
   </div>
  @endif
@endsection