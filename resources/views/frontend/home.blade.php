
@extends('frontend.layout')





@section('content')






<section id="banner">
	 
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
            @foreach($slider as $key => $image_slider)

            

              <li>
                <div id="container" style="filter: blur(2px);">
                    <div style="background: #86abf0;">
                        <img src="/images/{{ $image_slider->image }}" alt="Image" width="100%" height="700px"/>
                    </div>
                        
                    </div>
                
                     
                        <div class="flex-caption">
                            <h3>{{ $image_slider->titre }}</h3> 
                            <p>{{ $image_slider->description }}</p> 
                             
                        </div>
                                                     
                      
          </li>
             @endforeach
            </ul>
        </div>
	<!-- end slider -->
 
    </section> 
    

    


    

<section id="content" style="margin-bottom: 20px;margin-top:20px">
    <div class="container">
    
                        <div class="row"> 
                            <div class="col-md-12">
                                <div class="about-logo">
                                    <h3 id="title-home" style="text-align: center">Radisson Blu

                                    </h3>
                                    
                                    <HR align=center size=4 width="80%">
                                    <p id="pragphe" style="text-align: center">Choisissez des hôtels élégants créés spécialement pour vous. Profitez d’un accueil chaleureux avec une ambiance accueillante et de petites attentions pensées pour vous plaire. Laissez notre équipe attentive prendre soin des petits détails 
                                        qui font toute la différence pour votre séjour dans des destinations exceptionnelles, qui combinent fonctionnalité et personnalisation.
                                    </p>
                                    <HR align=center size=4 width="80%">

                                </div>  
                            </div>
                        </div> 
                        
    </div>
</section>	




	</section>	





    
    
    
    <div class="container" style="margin-bottom: 25px;margin-top:10px">
        
        <div class="row no-gutters mb-2 slick-mobile-cards slick-same-height" >
            <div class="col-md-12">
                <div class="about-logo">
                    <h3 id="title-home" style="text-align: center">Nos Services
                    </h3>
                </div>  
            </div>
        </div>
        <div class="row no-gutters mb-2 slick-mobile-cards slick-same-height" >

            <div class="col-md-3">
                    <div class="card card__featured-icon text-center no-border mb-lg-3">

                        <img  src="frontend/img/home-icon/coffee-service.png">                        
                        <div class="card__body">
                            <h3 class="h3 card__title">Café et thé offerts</h3>
                        </div>
                    </div>
                </div>
            <div class="col-md-3">
                    <div class="card card__featured-icon text-center  mb-lg-3">

                        <img  src="frontend/img/home-icon/lit-service.png">                        

                        <div class="card__body">
                            <h3 class="h3 card__title">Lits d’enfants disponibles</h3>
                        </div>
                    </div>
                </div>
         
           

         
            <div class="col-md-3">
                <div class="card card__featured-icon text-center  mb-lg-3">

                    <img  src="frontend/img/home-icon/feetness-service.png">                        

                    <div class="card__body">
                        <h3 class="h3 card__title">Centre de fitness</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card__featured-icon text-center  mb-lg-3">

                    <img  src="frontend/img/home-icon/wifi-service.png">                        

                    <div class="card__body">
                        <h3 class="h3 card__title">Wi-Fi gratuit</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <section id="content" style="margin-top:20px">
        <div class="container">
        
                            <div class="row"> 
                                <div class="col-md-12">
                                    <div class="about-logo">
                                        <h3 id="title-home" style="text-align: center">Nos Chambres
    
                                        </h3>
                                        
                                       
    
                                    </div>  
                                </div>
                            </div> 
                            
        </div>
    </section>	

    

    
<section id="gallery-1" style="text-align: center" style="margin-bottom: 20px">
	<div class="container" >

	<span style="text-align: center">
	   <ul class="filter" >
	
		<ul class="nav nav-tabs" id="myTab" role="tablist" >
		   <li class="nav-item h4" role="presentation"><a href="#" data-filter="*">Tous</a></li>
		   <li class="nav-item h4" role="presentation"><a href="#" data-filter=".chambre-reguliere">Chambre réguliere</a></li>
		   <li class="nav-item h4" role="presentation"><a href="#" data-filter=".chambre-familiale">Chambre familiale</a></li>
		   <li class="nav-item h4" role="presentation"><a href="#" data-filter=".suite">Suite</a></li>
		   <li class="nav-item h4" role="presentation"><a href="#" data-filter=".chambres-communicantes">Chambres communicantes</a></li>
		   <li class="nav-item h4" role="presentation"><a href="#" data-filter=".chambres-voisines">Chambres voisines</a></li>
		</ul>

	   </ul>
	</span>

   <!-- /.gallery-filter -->
   
   <div class="row">
    <div id="isotope-gallery-container" class="isotope" style="position: relative; overflow: hidden; height: 663px;">
       
     @foreach($chambres_dispo as $key => $chambre)
     <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper {{$chambre->type}} isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(780px, 0px, 0px);">
         
         <div class="gallery-item box-content" data-toggle="modal" data-target="#detailsmodalchambre" 
         
         data-nom="{{$chambre->nom}}"
         data-description="{{$chambre->description}}"
         data-prix="{{$chambre->prix_pax}}"
         data-type="{{$chambre->type}}"
         data-image="{{$chambre->image}}">

             <div class="gallery-thumb" style="margin: 10px">
                 <img  src="/images/{{ $chambre->image }}"  class="img-responsive img-thumbnail" style="height: 224px; width: 338px" alt="3rd gallery Thumb">
                 <div class="image-overlay"></div>
             </div>

             <div class="gallery-details">

         
             <h3 id="header-card"><div class="price pull-left">{{$chambre->nom}} </div><span class="price pull-right">{{$chambre->prix_pax}} DT</span></h3>
                 <p class="price pull-left">{{$chambre->description}}</p>  
         
                 <div class="row">

                 
                     <div class="col-md-12">
                         
                             
                         <div class="form-group">

                             <div class="row pull-left">
                                 
                             @foreach ($chambre->commodites as $one_commodites)
                             <div class="col" id="commodite-lien">
                                     <img width="24" height="24" src="/images/commodites_icon/{{ $one_commodites->icon }}" class="loaded">
                                     <label class="label label-primary" id="commodite-icon">{{ $one_commodites->nom }}</label>

                         
                             </div>
                             
                             @endforeach	
                             </div>
                         

                         </div>
                             
                     
                     </div>
                 
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












						
<div class="modal fade" id="detailsmodalchambre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
	<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">
			<h3> Detaills </h3>
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

					<div class="col-lg-12" style="margin-bottom: 10px">
						<div class="form-group">
							<label class="pull-left">Nom</label>
							<input  type="text"  class="form-control form-control-lg" id="nom" readonly >
				
						</div>
					</div>

					<div class="col-lg-12" style="margin-bottom: 10px">
						<div class="form-group">
							<label class="pull-left">Description</label>
							<input  type="text" class="form-control form-control-lg" id="description" readonly >
				
						</div>
					</div>

					<div class="col-lg-12" style="margin-bottom: 10px">
						<div class="form-group">
							<label class="pull-left">Prix</label>
							<input  type="number" class="form-control form-control-lg" id="prix" readonly >
				
						</div>
                    </div>
                    <div class="col-lg-12" style="margin-bottom: 10px">
						<div class="form-group">
							<label class="pull-left">Type</label>
							<input  type="text" class="form-control form-control-lg" id="type" readonly >
				
						</div>
					</div>
				
				
				
				
	
			</div>
		</div>
	</div>
	</div>
</div>





</section>

    











    




    <div class="container" style="margin-bottom: 40px;margin-top:40px">
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="mb-4">
                            <h2 class="title-section mb-3 h2" style="margin-top:10px">
                                L’expérience Radisson Blu
                                <HR  size=4 width="100%">
                            </h2>
                               
                            </div>
                    <div class="mb-5">
                        <div class="js-description overflow-text js-overflow-text text-rich all-visible" data-max-lines="10" style="max-height: 200px;"><div class="content-overflowed">Votre expérience Radisson Blu doit être centrée sur la personnalisation, à tous les niveaux. En nous occupant des petits détails qui font toute la différence, nous rendons chaque séjour inoubliable. Pénétrez dans des espaces élégants, conçus pour les affaires et les loisirs dans les destinations les plus prisées Nos chefs cuisiniers vous proposent une gastronomie de pointe et élégante pour tous vos repas chez Radisson Blu.
                            <HR  size=4 width="100%"> 
                                <a href="{{ url('/reservation')}}" class="btn btn-outline btn-outline ">RESERVATION</a>                        </div></div>
                        <button class="btn btn-link mb-4 px-0 hidden" data-show-more=".js-description" data-original-text="En savoir plus" data-toggle-text="Afficher moins">
                            <span class="text">En savoir plus</span>
                            <i class="icon-arrow-down xxs"></i>
                        </button>
                    </div>
                   

                </div>
    
            <div class="col-md-6">
                    <img data-src="https://media.radissonhotels.net/image/radisson-blu-brand/promotional/16256-116722-f64240775_3xl.jpg?impolicy=Card" alt="" class="lazy img-responsive loaded" src="https://media.radissonhotels.net/image/radisson-blu-brand/promotional/16256-116722-f64240775_3xl.jpg?impolicy=Card" data-was-processed="true"></div>
            </div>


        
    </div>

    <div class="container" style="margin-bottom: 40px;margin-top:80px">
        <div class="row mb-5">
            <div class="col-md-12">

                @foreach ($publicite as $pub)
                <div> 
                    <img src="/images/pub/{{ $pub->image }}" width="970px" height="250px" class="fill">
                </div>
                @endforeach	

        </div>
    </div>
    </div>

    <div class="about home-about">
        <div class="container">
                <!-- changing this part into card with slider to show programme-->
                <div class="row">
                    
                    <center> 
                        <h3 id="title-home" style="text-align: center">Merci Pour Votre feedback
                   </h3></center>	
                    
                    <div class="col-md-6" style="margin-top: 20px;">
                        <div class="block-heading-two">
                        
                        </div>	
                             <div class="testimonials">
                                <div class="active item">
                                  <blockquote><p>Ce fut un plaisir de séjourner dans cette toute nouvelle propriété, à 5 minutes à pied du centre commercial. Radisson Blu Djerba  est un bel hôtel. Merci !</p></blockquote>
                                  <div class="carousel-info">
                                    <div style="text-align: center">
                                        <span class="testimonials-name">Chers Client</span>
                                    </div>
                                  </div>
                                </div>
                            </div>
                    </div>
                    


                            
                    <div class="col-md-6" style="margin-top: 20px;">
                            <div class="block-heading-two">
                            
                            </div>	
                                 <div class="testimonials">
                                    <div class="active item">
                                      <blockquote><p>'hôtel est à 5 minutes à pied du point de départ de Mall Road. Les chambres sont propres, luxueuses et meublées de façon moderne. Merci !</p></blockquote>
                                      <div class="carousel-info">
                                        <div style="text-align: center">
                                          <span class="testimonials-name">Chers Client</span>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                        </div>



                </div>
                
                                         
                 
                <br>
             
              </div>
                
            </div>
    





    







@endsection






