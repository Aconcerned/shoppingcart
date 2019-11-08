@extends('layouts.master')

@section('content')

<div class="row">

   <div class="col-md-4 col-md-offset-4">
   <h1>Perfil </h1>
   <h2>Email: {{ $users->email }}</h2>
   <h2>Tipo de usuario: {{ $users->type }}</h2>
   </div>
</div>

@endsection