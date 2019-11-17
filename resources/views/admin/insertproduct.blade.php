<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <!-- Font Awesome -->
    <link href="{{ asset('fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >
    <!-- Ionicons -->
    <link href="{{ asset('fonts/ionicons.min.csss') }}" rel="stylesheet" type="text/css" >
    <!-- Theme style -->
    <link href="{{ asset('dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" >
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" >
    <!-- iCheck -->
    <link href="{{ asset('plugins/iCheck/flat/blue.css') }}" rel="stylesheet" type="text/css" >
    <!-- Morris chart -->
    <link href="{{ asset('plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" >
    <!-- jvectormap -->
    <link href="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" >
    <!-- Date Picker -->
    <link href="{{ asset('plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" >
    <!-- Daterange picker -->
    <link href="{{ asset('plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" >
    <!-- bootstrap wysihtml5 - text editor -->
     <link href="{{ asset('public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" >

<body class="hold-transition skin-blue sidebar-mini">
     <header class="main-header">
        <!-- Logo -->
        <a href="{{ route('admin.dashboard') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Plu</b>SIS</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">Usuario</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>

                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <!--<a href="#">Followers</a>-->
                    </div>
                    <div class="col-xs-4 text-center">
                     <!-- <a href="#">Sales</a>-->
                    </div>
                    <div class="col-xs-4 text-center">
                     <!-- <a href="#">Friends</a>-->
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{ route('user.profile', auth()->user()->id) }}" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ route('user.logout') }}" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Nuevo Producto del Sistema</h3>
                </div><!-- /.box-header -->

<div id="notificacion_resul_fanu"></div>

<script>
  var msg = '{{Session::get('alert')}}';
  var exist = '{{Session::has('alert')}}';
  if(exist){
    alert(msg);
  }
</script>

<form method="post" action="{{ route('admin.insertproduct') }}" class="form-horizontal form_entrada" >                         
@csrf

<div class="box-body col-xs-12">
<div class="form-group col-xs-6">
                      <label for="nombre">Titulo</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="titulos" >
</div>

<div class="form-group col-xs-12">
                      <label for="apellido">URL de la imagen</label>
                      <input type="text" class="form-control" id="imagePath" name="imagePath" placeholder="urls" >
</div>

<div class="form-group col-xs-12">
                      <label for="ciudad">Descripcion</label>
                      <input type="text" class="form-control" id="description" name="description" placeholder="descripcion" >
</div>

<div class="form-group col-xs-3">
                      <label for="institucion">Precio</label>
                      <input type="number" class="form-control" id="price" name="price" placeholder="precio" >
</div>

<div class="form-group col-xs-12">
<label for="pais">Tipo</label>
                      <select id="type" name="type" class="form-control">
                      <option value="libro">Libro</option>
                      <option value="comic">Comic</option>
                      </select>
</div>

</div>

<div class="box-footer col-xs-12 ">
                    <button type="submit" class="btn btn-primary">Guardar</button>
</div>


</form>

</div>
</body>