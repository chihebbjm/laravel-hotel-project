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



<div class="card-body">
	<div class="card" style="margin-right:40px;margin-left:40px;">
	<table id="example2" class="table table-bordered"  aria-describedby="example2_info">
	

		
<tr class="table">
		<th>Icon</th>
		<th> No </th>
		<th> nom </th>
		<th> description </th>
		<th> action </th>
	</tr>
	@foreach($commodites as $key => $commodite)
	<tr class="table-light">
			<td>
				<img width="24" height="24" src="/images/commodites_icon/{{ $commodite->icon }}" class="loaded" alt="icon" >
			</td>
			<td style="text-align: center; vertical-align: middle;" > {{ ++$i }} </td>
			<td style="text-align: center; vertical-align: middle;" > {{ $commodite->nom }} </td>
			<td style="text-align: center; vertical-align: middle;" > {{ $commodite->description }} </td>
			<td style="text-align: center; vertical-align: middle;" >
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




	<div class="row" style="margin:10px">
		<div class="col-md-8">

			<div class="pull-left" style="margin-left: 20px">

				<button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
					
					<i class="fa fa-plus" aria-hidden="true">
					Commodites
				</i>
			</button>
			</div>
		</div>
	</div>

	</div>
</div>




	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">
			  <h3>Ajouter Commodites </h3>
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
					<div class="col-md-12">
						<div class="form-group">
							<strong>nom:</strong>
							<input type="text" name="nom" class="form-control" placeholder="nom">
						</div>
					</div>
		
					<div class="col-md-12">
						<div class="form-group">
							<strong>description</strong>
							<textarea name="description" placeholder="description" class="form-control"></textarea>
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
						
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</form>





	  </div>
	</div>
  </div>




  <!-- Edit Modal -->

@endsection