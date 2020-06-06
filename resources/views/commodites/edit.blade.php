@extends('adminlte.dashboard')
@section('content')
	


<div class="card-body bg-light" style="padding-top:50px">
	<div class="card" style="margin-right:40px;margin-left:40px;">
	<div style="background: white">


	<div class="row" style="padding: 30px">
		<div class="col-md-6">
			<div>
				<h3> Modifer Commodites </h3>
			</div>
			<div >
				<a class="btn btn-success" href="{{ route('commodites.index') }}"> 
					<i class="fa fa-chevron-left" aria-hidden="true">
						list Commodites
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
				<div class="form-group">
					
					<label class="radio-inline"><input type="radio" name="icon" checked value="wifi.png">
						<img width="24" height="24" src="{{asset('/images/commodites_icon/wifi.png')}}"" class="loaded">
					</label>
					<label class="radio-inline"><input type="radio" name="icon" value="balcon.png">
						<img width="24" height="24" src="{{asset('/images/commodites_icon/balcon.png')}}" class="loaded">
						
					</label>
					<label class="radio-inline"><input type="radio" name="icon" value="climatisation.png">
					<img width="24" height="24" src="{{asset('/images/commodites_icon/climatisation.png')}}" class="loaded">	
					</label>
							
					</label>
					<label class="radio-inline"><input type="radio" name="icon" value="lit.png">
					<img width="24" height="24" src="{{asset('/images/commodites_icon/lit.png')}}" class="loaded">	
					</label>

					</label>
					<label class="radio-inline"><input type="radio" name="icon" value="minibar.png">
					<img width="24" height="24" src="{{asset('/images/commodites_icon/minibar.png')}}" class="loaded">	
					</label>

					</label>
					<label class="radio-inline"><input type="radio" name="icon" value="sechoir_cheveux.png">
					<img width="24" height="24" src="{{asset('/images/commodites_icon/sechoir_cheveux.png')}}" class="loaded">	
					</label>

					</label>
					<label class="radio-inline"><input type="radio" name="icon" value="television.png">
					<img width="24" height="24" src="{{asset('/images/commodites_icon/television.png')}}" class="loaded">	
					</label>

				</div>
			</div>


				<div class="col-lg-12">

					
				<button type="primary" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>


	</div>
	</div>
</div>




  



@endsection














