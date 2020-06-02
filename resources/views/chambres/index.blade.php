@extends('adminlte.dashboard')
@section('content')
	

<div class="row" style="padding-top: 40px">
	<div class="col-md-8">
	@if($message = Session::get('success'))
	<div class="alert alert-success" style="margin:50px">
		<p> {{ $message }} </p>
	</div>
	@endif
	</div>
</div>




<table class="table table-bordered"   
style="padding: 40px;margin-right:40px;margin-left:40px;
">

<tr class="table-danger">
		<th>Image</th>
		<th> No </th>
		<th> nom </th>
		<th> description </th>
		<th> prix_pax </th>
		<th> Action </th>
	</tr>
	@foreach($chambres as $key => $chambre)
	<tr class="table-light">
			<td>
				<img width="100" height="100" src="/images/{{ $chambre->image }}" class="loaded" alt="icon" >
			</td>
			<td style="text-align: center; vertical-align: middle;" > 
				{{ ++$i }} 
			</td>
			<td style="text-align: center; vertical-align: middle;" > 
				{{ $chambre->nom }} 
			</td>
			<td style="text-align: center; vertical-align: middle;" > 
				 {{ $chambre->description }} 
			</td>
			<td style="text-align: center; vertical-align: middle;" > 
				 {{ $chambre->prix_pax }} 
			</td>

			<td style="text-align: center; vertical-align: middle;" > 
				<form action="{{ route('chambres.destroy', $chambre->id) }}" method="POST">
					<a class="btn btn-primary" href="{{ route('chambres.edit', $chambre->id) }}">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
			
		</tr>
	@endforeach
</table>




	<div class="row" style="margin-left:10px">
		<div class="col-md-8">

			<div class="pull-left" style="margin-left: 20px">
				<a class="btn btn-success" data-toggle="modal" data-target="#exampleModal"> Create Chambres</a>
			</div>
		</div>
	</div>




	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">
			  <h3> Add New Commodites </h3>
			</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  
		
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
		





			<form action="{{ route('chambres.store') }}" method="POST" enctype="multipart/form-data">
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
		
				
					<div class="form-group">
						<label class="col-md-4">Select Image</label>
						<div class="col-md-8">
							<input type="file" name="image" />
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
							<strong>prix_pax :</strong>
							<textarea name="prix_pax" placeholder="prix_pax" class="form-control"></textarea>
						</div>
					</div>


					<div class="col-md-12">
					<div class="form-group">

					@foreach($commodites as $key => $commodite)
					<div class="radio-inline">	
						<label class="radio-inline"><input type="radio" name="commodites_icon"  value="{{$commodite->id}}">
							<img width="24" height="24" src="/images/{{ $commodite->icon }}" class="loaded">
							</label>
						<label>	{{$commodite->nom}}</label>	
					</div>
					@endforeach

					</div>
					</div>

					<div class="col-lg-12">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				


			</form>





	  </div>
	</div>
  </div>




  <!-- Edit Modal -->

@endsection