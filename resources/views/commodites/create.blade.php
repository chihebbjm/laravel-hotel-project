@extends('products.layout')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Add New Product </h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('commodites.index') }}"> Back to Products </a>
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

	

	<form action="{{ route('commodites.store') }}" method="POST">
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
					
					<ul>
						<li class="dropdown">
							<a href="#"  data-toggle="dropdown">ICON<b class="caret"></b></a>
							<ul class="dropdown-menu" name="icon">
								<li><a>
								<img width="24" height="24" src="https://image.flaticon.com/icons/svg/748/748151.svg" class="loaded">
									Wifi
								</a></li>
								<li><a>
									<img width="24" height="24" src="https://image.flaticon.com/icons/svg/82/82490.svg" class="loaded">
									Bacon
								</a></li>
								<li><a>
									<img width="24" height="24" src="https://image.flaticon.com/icons/svg/2905/2905562.svg" class="loaded">
									Climatisation
								</a></li>
							</ul>
						</li>
					</ul>

				</div>
			</div>

			<div class="col-lg-12">
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>



@endsection