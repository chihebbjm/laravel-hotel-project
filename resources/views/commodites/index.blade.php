@extends('adminlte.dashboard')
@section('content')
	

<div class="row" style="padding-top: 10px">
	<div class="col-md-8">
	@if($message = Session::get('success'))
	<div class="alert alert-success" style="margin:50px">
		<p> {{ $message }} </p>
	</div>
	@endif
	</div>
</div>




<table class="table table-bordered" 
style="padding: 40px;margin-right:40px;margin-left:40px">
	<tr>
		<th>Icon</th>
		<th> No </th>
		<th> nom </th>
		<th> description </th>
		
	</tr>
	@foreach($commodites as $key => $commodite)
		<tr>
			<td>
				<img width="24" height="24" src="/images/{{ $commodite->icon }}" class="loaded" alt="icon" >
			</td>
			<td> {{ ++$i }} </td>
			<td> {{ $commodite->nom }} </td>
			<td> {{ $commodite->description }} </td>
			<td>
				<form action="{{ route('commodites.destroy', $commodite->id) }}" method="POST">
					<a class="btn btn-primary" href="{{ route('commodites.edit', $commodite->id) }}">Edit</a>
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
				<a class="btn btn-success" data-toggle="modal" data-target="#exampleModal"> Create New Commodites</a>
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





	  </div>
	</div>
  </div>




  <!-- Edit Modal -->

@endsection