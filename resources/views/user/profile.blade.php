@extends('layouts.master')

@section('content')


   <div class="col-md-4 col-md-offset-4"> <!--  Muestra los datos del usuario-->
   <h1>Perfil </h1>
   <h2>Email: {{ $users->email }}</h2>
   <h2>Tipo de usuario: {{ $users->type }}</h2>
   </div>


@endsection