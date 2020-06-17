

@extends('frontend.layout')




@section('content')
<div id="full-content">



	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="text-align: center">
				<h2 class="pageTitle">Reservation
					</h2>
			</div>
		</div>
	</div>
	



<div class="container">
	
	<div class="row reservation-content">
		<div class="col-md-12" >




<div class="row" style="padding-top: 10px">
	<div class="col-md-12">
	@if($message = Session::get('success'))
	<div class="alert alert-success" >
		<p class="alert"> {{ $message }} </p>

	</div>
	@endif
	</div>
</div>

	



<div class="contact-form wow fadeInUp" id="form-reservation" style="visibility: visible; animation-name: fadeInUp;">
	
	<form action="{{ route('reservation.store') }}" method="POST">
		@csrf
		<div class="row">

			<div class="col-md-6" style="margin-bottom: 20px">
				<div>
				<label>Date d'arrivee</label>

				<div class="date">
				  <input type="date" name="date_arrivee"class="form-control" id="datepicker">
				</div>
			</div>
				<!-- /.input group -->
			 
			</div>

			<div class="col-lg-6" style="margin-bottom: 20px">
				<div class="form-group">
					<label>Date depart</label>
	
					<div class="date">
					  <input type="date" name="date_depart" class="form-control pull-right" id="datepicker">
					</div>
					
					<!-- /.input group -->
				  </div>
				</div>

				<div class="col-md-6" style="margin-bottom: 20px">
					<div class="form-group">
						<strong>Nom</strong>
						<input type="text" name="nom" class="form-control" placeholder="nom">
					</div>
				</div>
	
				<div class="col-md-6" style="margin-bottom: 20px">
					<div class="form-group">
						<strong>Prenom</strong>
						<input name="prenom" placeholder="prenom" class="form-control"></textarea>
					</div>
				</div>

			
				<div class="col-md-6" style="margin-bottom: 20px">
					<div class="form-group">
						<strong>Telephone</strong>
						<textarea name="telephone" type="number" placeholder="telephone" class="form-control"></textarea>
					</div>
				</div>
				
				<div class="col-md-6" style="margin-bottom: 20px">
					<div class="form-group">
						<strong>Email</strong>
						<textarea name="email" type="text" placeholder="email" class="form-control"></textarea>
					</div>
				</div>
	
				<div class="col-md-6" style="margin-bottom: 20px">
					<div class="form-group">
						<label>Number d'adultes :</label>
						<select name="nb_adultes" id="pet-select" class="form-control">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
				</div>

				<div class="col-md-6" style="margin-bottom: 20px">
					<div class="form-group">
						<label>Number d'enfant</label>
						<select name="nb_enfants" id="pet-select" class="form-control">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
				</div>


			


			<div class="col-md-12">
				<div class="form-group mt40">
					<strong>Demandes supplémentaires</strong>
					<textarea class="form-control" id="body" name="body" rows="5"  name="demande_supp" type="text" placeholder="demandes supplémentaires" ></textarea>
				</div><!-- form group end -->
			</div><!-- column end -->

			<div class="col-md-12 align-self-center">

				<div class="form-group mt40" style="margin-top: 20px">
					<center>
						<button type="submit" class="btn btn-danger btn-lg text-center" style="padding-left: 60px;padding-right:60px;width:100%">Enoyer</button>			</div>

				</center></div><!-- form group end -->
				
			</div><!-- column end -->
		

		</div><!-- row end -->
	</div><!-- form end -->
</div>



</div>
@endsection