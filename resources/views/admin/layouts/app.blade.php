<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    @stack('css')

</head>
<body class="hold-transition sidebar-mini">
        <div class="wrapper">
         
                @include('admin.layouts.partial.sidebar')
            <!-- Navbar -->
                @include('admin.layouts.partial.topbar')
            <!-- /.navbar -->
           
            <!-- Content Wrapper. Contains page content -->
            @yield('content')
            <!-- /.content-wrapper -->

         
            <!-- Main Footer -->
              
         
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="{{ asset('backend/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('backend/dist/js/adminlte.min.js')}}"></script>


        
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
  
  </script

  
        @stack('scripts')
</body>
</html>
