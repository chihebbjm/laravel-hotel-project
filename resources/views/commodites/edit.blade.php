@extends('adminlte.dashboard')
@section('content')
	



	<div class="row" style="padding: 30px">
		<div class="col-md-6">
			<div>
				<h3> Edit Product </h3>
			</div>
			<div >
				<a class="btn btn-success" href="{{ route('commodites.index') }}"> Back to Product List </a>
			</div>
		</div>
	</div>

	@if($errors->any())
		<div class="alert alert-danger">
			<strong>Oopps! </strong> Something went wrong.
			<ul>
				@foreach($errors->all() as $error)
					<li> {{ $error }} </li>
				@endforeach
			</ul>
		</div>
	@endif







	<form  action="{{ route('commodites.update', $commodite->id) }}" method="POST">
		@csrf
		@method("PUT")
		<div class="row" style="padding:30px">
			<div class="col-md-12">
				<div class="form-group">
					<strong>Nom :</strong>
					<input type="text" name="nom" value="{{ $commodite->nom }}" class="form-control" placeholder="Name">
				</div>
			</div>

			<div class="col-md-12">
				<div class="form-group">
					<strong>Description :</strong>
					<textarea name="description" placeholder="description" class="form-control">{{ $commodite->description }}</textarea>
				</div>
			</div>

		
			<div class="col-md-12">
				<div class="col-lg-12">
					<div class="form-group">
						
						<label class="radio-inline"><input type="radio" name="icon" checked value="wifi.png">
							<img width="24" height="24" src="{{asset('/images/wifi.png')}}"" class="loaded">
						</label>
						<label class="radio-inline"><input type="radio" name="icon" value="balcon.png">
							<img width="24" height="24" src="{{asset('/images/balcon.png')}}" class="loaded">
							
						</label>
						<label class="radio-inline"><input type="radio" name="icon" value="climatisation.png">
						<img width="24" height="24" src="{{asset('/images/climatisation.png')}}" class="loaded">	
						
						</label>
					</div>
				</div>

				<div class="col-lg-12">

					
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>







  



@endsection














