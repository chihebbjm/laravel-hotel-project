@extends('adminlte.dashboard')
@section('content')
	



	<div class="row" style="padding: 30px">
		<div class="col-md-6">
			<div>
				<h3> Edit Product </h3>
			</div>
			<div >
				<a class="btn btn-success" href="{{ route('galerie.index') }}"> Back to Galerie List </a>
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







	<form  action="{{ route('galerie.update', $galerie->id) }}" method="POST" enctype="multipart/form-data">
		@csrf
		@method("PUT")
		<div class="row" style="padding:30px">
			<div class="col-md-12">
				<div class="form-group">
					<strong>Titre:</strong>
					<input type="text" name="titre" value="{{ $galerie->titre }}" class="form-control" placeholder="Name">
				</div>
			</div>

			<div class="col-md-12">
				<div class="form-group">
					<strong>Region:</strong>
							<select name="tag" id="pet-select">
								<option value="sousse">Sousse</option>
								<option value="djerba">Djerba</option>
								<option value="tozeur">Tozeur</option>
								<option value="hammamet">Hammamet</option>
					</select>
				</div>
			</div>

			
			<div class="col-md-8" style="margin-bottom: 20px">
				<div class="form-group">
					<label style="margin-bottom: 20px">Select Image</label>
					<input type="file" name="image" />
				</div>
			</div>

			<div class="col-md-12">
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>









@endsection














