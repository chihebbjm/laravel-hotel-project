@extends('adminlte.dashboard')
@section('content')
	

<div class="card-body bg-light" style="padding-top:50px">
	<div class="card" style="margin-right:40px;margin-left:40px;">
	<div style="background: white">



	<div class="row" style="padding: 30px">
		<div class="col-md-6">
			<div>
				<h3> Modifer Image Galerie </h3>
			</div>
			<div >
				<a class="btn btn-success" href="{{ route('galerie.index') }}"> 
					<i class="fa fa-chevron-left" aria-hidden="true">
						 List Image  Galerie
					</i>
				</a>
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

			<div class="col-sm-12" style="margin-bottom: 20px">
				<div class="form-group">
					<label>Tag:</label>
					<select name="tag" id="pet-select" class="form-control">
						<option value="activites">Activites</option>
						<option value="restaurant">Restaurant</option>
						<option value="tennis">Tennis</option>
						<option value="vue mer">Vue mer</option>
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


	</div>
	</div>
</div>






@endsection














