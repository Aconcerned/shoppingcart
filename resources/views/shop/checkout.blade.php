@extends('layouts.master') 

@section('title')
 Shopping Cart
@endsection

@section('content')
<div class="row">
      <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
      <h1>Checkout</h1>
      <h4>Total: ${{ $total }}</h4>

         <form action="{{ route('checkout') }}" method="post" id="checkout-form">
            <div class="row">
             <div class="col-xs-12">
              <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" class="form-control" required>
               </div>
               </div>
               <br></br>
             
               <div class="col-xs-12">
                <div class="form-group">
                <label for="address">Direccion</label>
                <input type="text" id="address" class="form-control" required>
                 </div>
               </div>
               <br></br>

               <div class="col-xs-12">
                 <div class="form-group">
                <label for="card-name">Nombre del titular de la tarjeta</label>
                <input type="text" id="card-name" class="form-control" required>
                 </div>
                </div>
                <br></br>

                <div class="col-xs-12">
                 <div class="form-group">
                <label for="card-number">Numero de la tarjeta</label>
                <input type="text" id="card-number" class="form-control" required>
                 </div>
                </div>
                <br></br>
                
                <div class="col-xs-12">
                   <div clas="form-group">
                   <label for="card-expiry-month">Mes que expira</label>
                   <input type="text" id="card-expiry-month" class="form-control" required>
                 </div>
                </div>
                <br></br>

                <div class="col-xs-12">
                   <div clas="form-group">
                   <label for="card-expiry-year">Año que expira</label>
                   <input type="text" id="card-expiry-year" class="form-control" required>
                 </div>
                </div>
                <br></br>
 
                <div class="col-xs-12">
                 <div class="form-group">
                <label for="card-cvc">Codigo de seguridad</label>
                <input type="text" id="card-cvc" class="form-control" required>
                 </div>
                </div>
                <br></br>
         </div>
         {{ csrf_field() }}
         <button type="submit" class="btn btn-success">Comprar</button>
         </form>
      </div>
</div>
@endsection