<nav class="navbar navbar-expand-lg navbar-light bg-light"> <!--  Inicio de la barra -->
  <a class="navbar-brand" href="{{ route('product.index') }}">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> <!-- Aqui se encuentra el carrito -->
        <a class="nav-link" href="{{ route('product.shoppingCart') }}"><i class="fi-xtluhl-shopping-cart-thin"></i> Carrito
        <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span></a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fi-cnsuxl-user-circle"></i> Cuenta de usuario <!--  Este es el usuario -->
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        @if(Auth::check()) <!--  Detecta si hay un usuario o no -->
        <a class="dropdown-item" href="{{ route('user.profile') }}"><i class="fi-xtluxl-user-thin"></i> Perfil</a> <!-- Perfil -->
        <a class="dropdown-item" href="{{ route('user.logout') }}"><i class="fi-xnsuxl-trash-bin"></i> Cerrar</a> <!-- Cerrar la sesion -->
         @else
         <a class="dropdown-item" href="{{ route('user.signup') }}"><i class="fi-stluxl-user-plus-thin"></i> Registrarse</a> <!-- Ir al perfil -->
          <a class="dropdown-item" href="{{ route('user.signin') }}"><i class="fi-xtluxl-user-thin"></i> Iniciar sesion</a> <!-- Ir al perfil -->
         @endif
        </div>
      </li>
      </ul>
    </form>
  </div>
</nav>