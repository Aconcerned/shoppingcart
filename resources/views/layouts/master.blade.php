<html>

<head>
 
  <meta charset="UTF-8">
  <title>@yield('title')</title> <!--Obtiene el titulo del archivo PHP el cuel esta-->
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script defer src="https://friconix.com/cdn/friconix.js"></script>
  <link href="{{ URL::to('src/css/app.css') }}" rel="stylesheet" type="text/css" >
  @yield('styles') <!--Obtiene el css de arriba-->
</head>

<body>
@include('partials.header') <!--Obtiene la barra de navegacion -->

<div class="container">
@yield('content') <!--Coloca lo que se encuentre con la tag contenido en la pagina -->
</div>

<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@yield('scripts') <!--Coloca los scripts de bootstrap -->

</body>

</html>