<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>
	Radisson hotels
</title>
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
        <p class="pull-left hidden-xs"><i class="fa fa-phone"></i> RÉSERVATIONS: +216 75757600</p>
		<p class="pull-right"> lundi au samedi :  8h à 20h </p>
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
			<div class="col-md-4 col-sm-4">
				<div class="widget" style="text-align: left">
					<h4 class="widgetheading">Nos Contact</h4>
					<address>
					<strong style="text-align: left">Plomberie-daniel
						</strong><br>
						Houmt Souk, Zone Touristique, Djerba 4128, Tunisie L’établissement Radisson Blu Palace Resort & Thalasso<br></address>
					<p>
						<i class="icon-phone"></i> Tel No. 216 75757600 <br>
						<i class="icon-envelope-alt"></i> info.djerba@radissonblu.com

					</p>
				</div>
			</div>
		<div class="col-md-4 col-sm-4">

		</div>
			<div class="col-md-4 col-sm-4">
				<div class="widget" style="text-align: left">
					<h4 class="widgetheading">Quick Links</h4>
					<ul class="link-list">
						<li><a href="https://www.radissonhotelgroup.com/">Radisson Hotel Group</a></li>
						<li><a href="https://www.radissonhotels.com/en-us/app">Radissoun blu App</a></li>
						<li><a href="https://www.radissonhotels.com/en-us/privacy">Privacy policy</a></li>
						<li><a href="https://www.radissonhotels.com/en-us/faq">FAQ</a></li>
					</ul>
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
	  var type =button.data('type')
	  var description =button.data('description')
	  var prix =button.data('prix')
	  var image=button.data('image')
	
	  var modal = $(this)
	  //the id of the input  (#email)
	  modal.find('.modal-body #nom').val(nom);
	  modal.find('.modal-body #description').val(description);
	  modal.find('.modal-body #prix').val(prix);
	  modal.find('.modal-body #type').val(type);
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