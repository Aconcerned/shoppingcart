@extends('layouts.master') 

@section('title')
 Shopping Cart
@endsection

@section('content')
<br></br>

  @foreach($products->chunk(3) as $productChunk)
  <div class="row d-flex"> <!--  Esta es la tabla de los productos en si-->
    @foreach($productChunk as $product)
    <div class="col-sm-3 col-md-4 columna">
    <div class="thumbnail">
    <center><img src="{{ $product->imagePath }}" alt="Imagen" class="img-responsive"></center>
    <h3>{{ $product->title }}</h3> 
     <div class="caption">
     <p class="description">{{ $product->description }}</p>
     <div class="text-left price">${{ $product->price }}</div>
     <div class="buttontainer"><a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-primary btn-lg btn-block" role="button">Añadir</a></div>
     </div>

    </div>
   </div>
    @endforeach
    </div>
  @endforeach

@endsection