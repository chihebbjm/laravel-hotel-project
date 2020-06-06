@extends('contact.layout')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Reservation Form  </h3>
			</div>
			
		</div>
	</div>

	
<div class="row" style="padding-top: 10px">
	<div class="col-md-8">
	@if($message = Session::get('success'))
	<div class="alert alert-success" style="margin:50px">
		<p> {{ $message }} </p>
	</div>
	@endif
	</div>
</div>

	

	<form action="{{ route('reservation.store') }}" method="POST">
		@csrf
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<strong>nom:</strong>
					<input type="text" name="nom" class="form-control" placeholder="nom">
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>prenom</strong>
					<textarea name="prenom" placeholder="prenom" class="form-control"></textarea>
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>telephone</strong>
					<textarea name="telephone" type="number" placeholder="telephone" class="form-control"></textarea>
				</div>
			</div>
		
			<div class="col-lg-12">
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>



@endsection