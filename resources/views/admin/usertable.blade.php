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

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

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

<body>

<div class="panel-body">
<table class="table table-bordered table-striped" id="laravel_datatable">
        <thead>
            <tr>
                <th>Email</th>
                <th>Type</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
</table>
</div>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

        <script>
 $(document).ready( function () {

      fetch_data();
 
      function fetch_data(){
        $.ajax({
        url:"/shoppingcart/public/admin/usertable/fetch_data",
        dataType:"json",
        success:function(data){
          var html = '';
          html += '<tr>';
          html += '<td contenteditable id="email"></td>';
          html += '<td contenteditable id="type"></td>';
          html += '<td><button type="button" id ="add">Add</button></td></tr>'

          for(var count=0; count < data.length; count++){
            html += '<tr>';
            html += '<td contenteditable class="column_name" data-column_name="email" id ="'+data[count].id+'">'+data[count].email+'</td>';
            html += '<td contenteditable class="column_name" data-column_name="type" id ="'+data[count].id+'">'+data[count].type+'</td>';
            html += '<td><button type="button" class="btn btn-danger" id="'+data[count].id+'">Delete</button></td></tr>'
          }
          $('tbody').html(html);
        }
      })
      }
     });
</script>

</body>