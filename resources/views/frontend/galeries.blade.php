
@extends('frontend.layout')




@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle"><label>Galerie</label>
					</h2>
			</div>
		</div>
	</div>
</section>



	<section id="content">
		<div class="container">
		
							<div class="row"> 
								<div class="col-md-12">
									<div class="about-logo" style="text-align: center">
										<h3 id="title">Radisson Blu est conçu pour vous</h3>
										<p id="pragphe">Choisissez des hôtels élégants créés spécialement pour vous. Profitez d’un accueil chaleureux avec une ambiance accueillante et de petites attentions pensées pour vous plaire. Laissez notre équipe attentive prendre soin des petits détails 
											qui font toute la différence pour votre séjour dans des destinations exceptionnelles, qui combinent fonctionnalité et personnalisation.
										</p>
									</div>  
								</div>
							</div> 
							
		</div>
	</section>	













<section id="gallery-1" style="text-align: center">
	<div class="container" >

	<span style="text-align: center">
	   <ul class="filter" >
	
		<ul class="nav nav-tabs" id="myTab" role="tablist" >
		   <li class="nav-item h4" role="presentation"><a href="#" data-filter="*">All</a></li>
		   <li class="nav-item h4" role="presentation"><a href="#" data-filter=".activites">Activites</a></li>
		   <li class="nav-item h4" role="presentation"><a href="#" data-filter=".restaurant">Restaurant</a></li>
		   <li class="nav-item h4" role="presentation"><a href="#" data-filter=".suite">Suite</a></li>
		   <li class="nav-item h4" role="presentation"><a href="#" data-filter=".vue-mer">Vue mer</a></li>
		</ul>

	   </ul>
	</span>

   <!-- /.gallery-filter -->
   
   <div class="row">
	   <div id="isotope-gallery-container" class="isotope" style="position: relative; overflow: hidden; height: 663px;">
		  
		@foreach($galeries as $key => $image_galerie)
	

		<div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper {{$image_galerie->tag}} isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(780px, 0px, 0px);">
		
			<div class="gallery-item" data-toggle="modal" data-target="#detailsmodalgalerie"
			data-image="{{$image_galerie->image}}"
			data-titre="{{$image_galerie->titre}}">


				<div class="gallery-thumb">
					<img src="/images/{{ $image_galerie->image }}" class="img-responsive" alt="1st gallery Thumb" style="height: 224px; width: 338px">
					<div class="image-overlay"></div>
				</div>
				<div class="gallery-details">
					<div class="editContent">
					<h5>{{$image_galerie->titre}}</h5>
					</div>
				
				</div>
			</div>


		</div>


		@endforeach
		 
		
		   
	   </div>
	   <!-- /.isotope-gallery-container -->
   </div>
   <!-- /.row --> 
<!-- /.container -->
</div>
</section>










						
<div class="modal fade" id="detailsmodalgalerie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
	<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">
			<h3 id="titre"></h3>
		</h5>
	
		</div>
		<div class="modal-body">
			<div class="modal-body">
			
				<div class="row">
	
					<div class="col-lg-12" style="margin-bottom: 10px">
						<div class="form-group">
						<img id="image" width="100%" height="300px">
						</div>
					</div>


					
				

					

			</div>
		</div>
	</div>
	</div>
</div>








@endsection






