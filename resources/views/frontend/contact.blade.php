



@extends('frontend.layout')




@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contactez-nous
					</h2>
			</div>
		</div>
	</div>
	</section>



<div class="container">


	






	<div class="row" >
		<div class="col-md-12" >
			<div class="about-logo">
				<h3 id="title">
					Accès au Radisson Blu Palace Resort & Thalasso, Djerba

				</h3>
				<span>
					Houmt Souk, Zone Touristique, Djerba 4128, Tunisie
					L’établissement Radisson Blu Palace Resort & Thalasso, Djerba est un hôtel emblématique, élégant et sophistiqué jouissant d’une situation idéale. Il se situe à une courte distance à pied des plages de sable blanc de la mer Méditerranée et d’un paisible lagon offrant des vues à couper le souffle. Vous profiterez sans aucun doute d’un séjour inoubliable grâce à un cadre idéal en plus des nombreuses installations luxueuses de l’établissement.
				</span>
				<p style="margin-bottom: 50px;margin-top: 20px;"></p>
				<h3 class="h3 card--info__title mb-4" style="color: tomato; margin:20px">Contact général</h3>

				<div class="card card--info">

					<ul class="list">

						
						
						<li>
							<label class="text-underline font-light align-top" href="mailto:info.palace.djerba@radissonblu.com" data-test="t-email" data-di-id="di-id-7f18c2c5-1a6ec5aa"><i class="fa fa-envelope-o" aria-hidden="true"></i>
 								info.palace.djerba@radissonblu.com</label></li>

						</li>
						<li>
							<label class="color-mako font-light align-top" href="tel:+216 75 75 76 00" data-di-id="di-id-5cb99cd7-95d020b7"><span data-test="t-phone">
								<i class="fa fa-phone" aria-hidden="true"></i>
								+216 75 75 76 00</span></label></li>

						</li>
					
						
					</ul>

				</div>
				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">



			<div class="contact-form wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

				<div class="form" id="contact-form">
					<div class="row">
					<form action="{{ route('contact.store') }}" method="POST">
							@csrf
						<div class="col-md-12">
							<div class="form-group mb40">
								<input type="text" class="form-control" id="raison_sociale" name="nom"
									placeholder="Votre nom">
							</div><!-- form group end -->
							<div class="form-group mb40">
								<input type="text" class="form-control" id="raison_sociale" name="email"
									placeholder="Votre email">
							</div><!-- form group end -->
						</div><!-- column end -->
						
						<div class="col-md-12">
							<div class="form-group mt40">
								<textarea class="form-control" id="body" name="message" rows="5"
									placeholder="Votre message"></textarea>
							</div><!-- form group end -->
						</div><!-- column end -->

						<div class="col-md-3 align-self-center">

							<div class="form-group mt40">
								<center>
									<button type="submit" class="btn btn-danger btn-lg">Enoyer</button>

							</div><!-- form group end -->
							</center>
						</div><!-- column end -->
					
					</form>
					</div><!-- row end -->
				</div><!-- form end -->
			</div>

			</form>
		</div>
		<div class="col-md-6">
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
			<div style="overflow:hidden;height:500px;width:600px;">
				<div id="gmap_canvas" style="height:500px;width:600px;"></div>
				<style>
					#gmap_canvas img {
						max-width: none !important;
						background: none !important
					}
				</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a>
			</div>
			<script
				type="text/javascript"> function init_map() { var myOptions = { zoom: 14, center: new google.maps.LatLng(40.805478, -73.96522499999998), mapTypeId: google.maps.MapTypeId.ROADMAP }; map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions); marker = new google.maps.Marker({ map: map, position: new google.maps.LatLng(40.805478, -73.96522499999998) }); infowindow = new google.maps.InfoWindow({ content: "<b>The Breslin</b><br/>2880 Broadway<br/> New York" }); google.maps.event.addListener(marker, "click", function () { infowindow.open(map, marker); }); infowindow.open(map, marker); } google.maps.event.addDomListener(window, 'load', init_map);</script>
		</div>
	</div>






</div>

@endsection