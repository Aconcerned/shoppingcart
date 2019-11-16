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

<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Nuevo Producto del Sistema</h3>
                </div><!-- /.box-header -->

<div id="notificacion_resul_fanu"></div>



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