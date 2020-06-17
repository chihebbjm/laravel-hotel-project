<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<!-- css -->
<link href="{{ asset('frontend/css/bootstrap.min.css')}}"rel="stylesheet" />
<link href="{{ asset('frontend/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet"> 
<link href="{{ asset('frontend/css/flexslider.css')}}" rel="stylesheet" />
<link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet" />
 <style>

 </style>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs"><i class="fa fa-phone"></i> RÉSERVATIONS: +33 182884320 </p>
        <p class="pull-right"> © 2020 Radisson Hotel Group FAQ </p>
      </div>
    </div>
  </div>
</div>
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="{{ url('/')}}"><img width="200px" height="50px" src="{{ asset('/frontend/img/logo/logo.png')}}" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
						<li><a href="{{ url('/')}}">accueil</a></li> 
						<li><a href="{{ url('/chambre')}}">chambres</a></li> 
						<li><a href="{{ url('/reservation')}}">reservation</a></li> 
						<li><a href="{{ url('/galeries')}}">galerie</a></li> 
						<li><a href="{{ url('/contact')}}">contact</a></li> 

						
				
						
                    </ul>
                </div>
            </div>
        </div>
    </header>
    

<section id="content" >   

    @yield('content')

</section>




<footer>
	<div class="container">
		<div class="row">
		
			<div class="col-6 col-md-10 col-lg-11 hotel-address d-flex flex-column justify-content-center">

				<div class="row mb-2">
					<div class="col d-md-flex align-items-center flex-nowrap" style="margin-left: 30px">
						<h2 class="h2 text-18 font-bold" itemprop="name" >Radisson Blu Palace Resort &amp; Thalasso Groupe </h2>
					</div>
				</div>
			</div>
		
			<div class="col-6 col-md-10 col-lg-11">
				<div class="row justify-content-md-center">

			
				<div class="col-6 col-lg-6 justify-content-center" >
						<img  width="200px" height="50px" src="{{ asset('/frontend/img/spo/logo-spo.png')}}" class="user-image" alt="User Image">

					</div>
				   <div class="col-6 col-lg-6 justify-content-center">
					<img   width="200px" height="50px" src="{{ asset('/frontend/img/spo/logo-spo2.png')}}" class="user-image" alt="User Image">

					</div>
				
					
				</div>
			</div>
			
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>Tous droits réservés. RHG Radisson Hotel Group, Radisson, Radisson RED, Radisson Blu, Park Plaza,
								 Park Inn, Country Inn & Suites, Radisson Rewards et Radisson Meetings sont des marques déposées à l’U.S.</span>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('frontend/js/jquery.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.fancybox-media.js') }}"></script>  
<script src="{{ asset('frontend/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('frontend/js/animate.js') }}"></script> 
<!-- Vendor Scripts -->
<script src="{{ asset('frontend/js/modernizr.custom.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/js/animate.js') }}"></script>
<script src="{{ asset('frontend/js/custom.js') }}"></script>





<script>


	$('#detailsmodalchambre').on('show.bs.modal',function (event){
	  var button = $(event.relatedTarget)
	  //data-email in the  button to open modal :
	  var nom =button.data('nom')
	  var description =button.data('description')
	  var prix =button.data('prix')
	  var image=button.data('image')
	
	  var modal = $(this)
	  //the id of the input  (#email)
	  modal.find('.modal-body #nom').val(nom);
	  modal.find('.modal-body #description').val(description);
	  modal.find('.modal-body #prix').val(prix);
	  modal.find('.modal-body #image').attr("src","images/"+image);
  
  
	})
  
  </script>


<script>


	$('#detailsmodalgalerie').on('show.bs.modal',function (event){
	  var button = $(event.relatedTarget)
	  //data-email in the  button to open modal :
	  
	  var image=button.data('image')
	  var titre=button.data('titre')
	  var modal = $(this)
	  //the id of the input  (#email)
	 
	  modal.find('.modal-body #image').attr("src","images/"+image);
	  modal.find('.modal-body #titre').val(titre);

  
	})
  
  </script>




</body>
</html>