@extends('layouts.master')

@section('content')
<div class="row">
   
   <div class="col-md-4 col-md-offset-4">

    <h1>Registrarse</h1>
    @if(count($errors) > 0)
     <div class="alert alert-danger">
     @foreach($errors->all() as $error) <!--  Detecta los errores-->
     <p>{{ $error }}</p>
     @endforeach
    </div>
    @endif

    <form action="{{ route('user.signup') }}" method="post"> <!--  Manda los datos a la ruta para que el controlador los use -->
       <div class="form group">
          <label for="email">E-Mail</label>
          <input type="email" id="email" name="email" class="form-control"></input>
       </div>

       <div class="form group">
          <label for="password">Clave</label>
          <input type="password" id="password" name="password" class="form-control"></input>
       </div>
       <br></br>
       <button type="submit" id="submit" name="submit" class="btn btn-primary">Registrarse</button>
       {{ csrf_field() }}
       
     </form>

   </div>
</div>
@endsection