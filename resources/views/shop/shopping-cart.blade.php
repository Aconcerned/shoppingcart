@extends('layouts.master') 

@section('title')
 Shopping Cart
@endsection

@section('content')
<br></br>
  @if(Session::has('cart'))
   <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
       <ul class="list-group">
         @foreach($products as $product)
           <li class="list-group-item">
             <span class="badge">{{ $product['qty'] }}</span>
             <strong>{{ $product['item']['title'] }}</strong>
             <span class="label label-success">{{ $product['price'] }}</span>
             <div class="btn-group">
             <button type="button" class="btn dropdown-toggle" 
             data-toggle="dropdown">Opcion <span class="caret"></span></button>
             <ul class="dropdown">
              <li><a href="#">Reducir por 1</a></li>
              <li><a href="#">Quitar todo</a></li>
              </ul>
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
        <button type="button" class="btn btn-success">Checkout</button>
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