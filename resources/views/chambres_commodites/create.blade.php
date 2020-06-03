@extends('products.layout')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Add New chambres </h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('chambres.index') }}"> Back to Products </a>
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

	

	<form action="{{ route('chambres.store') }}" method="POST">
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
					<strong>description</strong>
					<textarea name="description" placeholder="description" class="form-control"></textarea>
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<div class="form-group">
						<label class="col-md-4 text-right">Select Image</label>
						<div class="col-md-8">
						 <input type="file" name="image" />
						</div>
					</div>
			</div>


			<div class="col-lg-12">
				<div class="form-group">
					<strong>prix_pax</strong>
					<textarea name="prix_pax" placeholder="prix_pax" class="form-control"></textarea>
				</div>
			</div>

		

			<div class="col-lg-12">
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>



@endsection