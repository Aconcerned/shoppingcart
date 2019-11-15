@extends('layouts.master') 

@section('title')
 Shopping Cart
@endsection

@section('content')
      <h1>Checkout</h1>
      <h4>Total: ${{ $total }}</h4>
      
      </div>

<form action="{{ route('checkout') }}" method="post">
@csrf
<div class="box-body col-xs-12">
<div class="form-group col-xs-6">
                      <label for="nombre">Titular</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="name" >
</div>

<div class="form-group col-xs-12">
                      <label for="apellido">Direccion</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="address" >
</div>

<div class="form-group col-xs-12">
                      <label for="ciudad">Nombre de la tarjeta</label>
                      <input type="text" class="form-control" id="card-name" name="card-name" placeholder="nombre" >
</div>

<div class="form-group col-xs-3">
                      <label for="institucion">Numero de la tarjeta</label>
                      <input type="number" class="form-control" id="card-number" name="card-number" placeholder="numero" >
</div>

<div class="form-group col-xs-3">
                      <label for="institucion">Mes que expira</label>
                      <input type="number" class="form-control" id="card-expiry-month" name="card-expiry-month" placeholder="mes" >
</div>

<div class="form-group col-xs-3">
                      <label for="institucion">Año que expira</label>
                      <input type="number" class="form-control" id="card-expiry-year" name="card-expiry-year" placeholder="año" >
</div>

<div class="form-group col-xs-3">
                      <label for="institucion">CVC</label>
                      <input type="number" class="form-control" id="card-cvc" name="card-cvc" placeholder="cvc" >
</div>

<div class="form-group col-xs-3">
                      <label for="institucion">Total</label>
                      <input type="number" class="form-control" id="total" name="total" placeholder="${{ $total }}" value="${{ $total }}" disabled>
</div>


<div class="form-group col-xs-12">

</div>

<div class="box-footer col-xs-12 ">
                    <button type="submit" class="btn btn-primary">Comprar</button>
</div>


</form>

</div>
@endsection