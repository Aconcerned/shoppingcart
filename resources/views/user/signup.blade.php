@extends('layouts.master')

@section('content')
<div class="row">
   
   <div class="boi">
    <br></br>
    <center><h1>Registrarse</h1></center>
    <br></br>
    @if(count($errors) > 0)
     <div class="alert alert-danger">
     @foreach($errors->all() as $error)
     <p>{{ $error }}</p>
     @endforeach
    </div>
    @endif

    <form class="forma" action="{{ route('user.signup') }}" method="post">
       <div class="form group">
          <label for="email" class="email">E-Mail</label>
          <input type="email" id="email" name="email" class="form-control"></input>
       </div>

       <br></br>

       <div class="form group">
          <label for="password" class="email">Clave</label>
          <input type="password" id="password" name="password" class="form-control"></input>
       </div>
       <br></br>
       <center><button type="submit" id="submit" name="submit" class="btn btn-primary">Registrarse</button><center>
       {{ csrf_field() }}
       
     </form>

   </div>
</div>
@endsection