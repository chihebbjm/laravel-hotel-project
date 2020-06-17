
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel</title>

 <link rel="stylesheet" href="{{asset('css/app.css')}}">

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/skin-blue.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">




</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/dashboard') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
      <div class="pull-right" >

      </div>
   
    <div class="navbar" role="navigation">
      <div class="row justify-content-end">

      <!-- Sidebar toggle button-->
     
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav"  >
          <!-- Messages: style can be found in dropdown.less-->
      
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
              <!-- The user image in the navbar-->
              <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              
                {{ Auth::user()->name }} 
              
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }} 
                  
                  <small>Adminsrator</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <di class="col-3"></di>
                  <div class="col-6 text-center">

                    <button class="btn btn-primary" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out" aria-hidden="true">
                      Logout
                    </i>
                                      
                    </button>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

                  </div>
                  <di class="col-3"></di>
                 
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </div>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>           
          {{ Auth::user()->name }} <span class="caret"></span>
          </p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        


        <li class="treeview">
          <a href="#"><i class="fa fa-home" ></i> <span>Gérer les chambres</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/chambres') }}">List chambres</a></li>
          </ul>
        </li>


        
        <li class="treeview">
          <a href="#"><i class="fa fa-plug"></i> <span>Gérer les commodités</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/commodites') }}">List commodités</a></li>
          </ul>
        </li>

        
     
    
        <li class="treeview">
          <a href="#"><i class="fa fa-sliders"></i> <span>Gérer les slider</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/slider') }}">List Image Slider </a></li>
          </ul>
        </li>

      

        <li class="treeview">
          <a href="#"><i class="fa fa-file-image-o"></i> <span>Gérer galerie</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/galerie') }}">List Image</a></li>
          </ul>
        </li>


        <li><a href="{{ url('/reservation-admin')}}"><i class="fa fa-list-alt"></i> <span>Consulter es réservation</span></a></li>
        <li><a href="{{ url('/contact-admin')}}"><i class="fa fa-comments"></i> <span>Consulter les messages</span></a></li>
        <li><a href="#"><i class="fa fa-wrench"></i> <span>Autre</span></a></li>


<!-- /.
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Gérer les Produit</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/products') }}">Demo exemple </a></li>
          </ul>
        </li>
-->
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
        @yield('content')
    
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
 
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>


<script>


  $('#detailsmodal').on('show.bs.modal',function (event){
    var button = $(event.relatedTarget)
    //data-email in the  button to open modal :
    var email =button.data('email')
    var date_arrivee =button.data('date_arrivee')
    var date_depart =button.data('date_depart')
    var nb_adultes =button.data('nb_adultes')
    var nb_enfants =button.data('nb_enfants')
    var demande_supp =button.data('demande_supp')

    var modal = $(this)
    //the id of the input  (#email)
    modal.find('.modal-body #email').val(email);
    modal.find('.modal-body #date_arrivee').val(date_arrivee);
    modal.find('.modal-body #date_depart').val(date_depart);
    modal.find('.modal-body #nb_adultes').val(nb_adultes);
    modal.find('.modal-body #nb_enfants').val(nb_enfants);
    modal.find('.modal-body #demande_supp').val(demande_supp);


  })

</script>

</body>




    
</html>