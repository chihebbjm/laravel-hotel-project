@extends('admin.layouts.app')

@section('title','Chambre')

@push('css')

@endpush

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
       
        <!-- Main content -->
        <div class="content">





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

	
<div class="row" style="margin:10px">
	<div class="col-md-8">

		<div class="pull-left" style="margin-left: 20px">
			<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					
					<i class="fa fa-plus" aria-hidden="true"> Chambres
					</i>
					</button>
		</div>
	</div>
</div>


<table id="example2" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">




<tr >
		<th>Image</th>
		<th> No </th>
		<th> Status </th>
		<th> Nom </th>
		<th> Description </th>
		<th> Prix_pax</th>
		<th> Commodites</th>
		<th> Type</th>
		<th> Action </th>
	</tr>
	@foreach($chambres as $key => $chambre)
	<tr >
			<td style="width: 60px">
				<img width="100" height="100" src="/images/{{ $chambre->image }}" class="loaded" alt="icon" >
			</td>
			<td style="text-align: center; vertical-align: middle;" > 
				{{ ++$i }}
			</td>
			<td style="vertical-align: middle;width: 50px" > 
				@if($chambre->status =='disponible')         
				<label 
				name=""
				class="btn btn-success"> {{ $chambre->status }} </label>	
				@else
				<label class="btn btn-warning"> {{ $chambre->status }} </label>	
				@endif
			</td>
		
			<td style="text-align: center; vertical-align: middle;width: 60px" > 
				{{ $chambre->nom }} 
			</td>
			<td style="text-align: center; vertical-align: middle;width: 200px"  > 
				 {{ $chambre->description }} 
			</td>
			<td style="text-align: center; vertical-align: middle;width: 50px" > 
				 {{ $chambre->prix_pax }} 
			</td>
			<td style="text-align: center; vertical-align: middle;">
			
				<div class="row">
					
					@foreach ($chambre->commodites as $one_commodites)
					

							<div class="col-md-2">
								<div class="radio-lien">
								<img width="24" height="24" src="/images/commodites_icon/{{ $one_commodites->icon }}" class="loaded">
								<label class="label label-default">{{ $one_commodites->nom }}</label>
								</div>
							</div>

					@endforeach
				</div>
			
			</td>
			<td style="text-align: center; vertical-align: middle;width: 50px" > 
				{{ $chambre->type }} 
		   </td>
			<td style="text-align: center; vertical-align: middle;" > 
				<form action="{{ route('chambres.destroy', $chambre->id) }}" method="POST">
					<a class="btn btn-primary" href="{{ route('chambres.edit', $chambre->id) }}">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" onclick="return confimeDelete();"  class="btn btn-danger">Delete</button>
				</form>
 
				<form  action="{{route('chambredep',$chambre->id)}}" method="GET" >
					@csrf
					<button type="submit" class="btn btn-info">Status</button>
				</form>


			</td>
			
		</tr>
	@endforeach
</table>

<div id="pagintion" class="row-pull-right" >
	<div class="pull-right" style="margin-left: 20px">
		<div class="pull-right">{{ $chambres->links() }}</div>
	
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
			  <h3> Ajouter Chambres </h3>
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
					<div class="col-lg-12" style="margin-bottom: 20px">
						<div class="form-group">
							<strong>nom:</strong>
							<input type="text" name="nom" class="form-control" placeholder="nom">
						</div>
					</div>
		
					<div class="col-lg-12" style="margin-bottom: 20px">
						<div class="form-group">
							<strong>description</strong>
							<textarea name="description" placeholder="description" class="form-control"></textarea>
						</div>
					</div>
		

							
					<div class="col-lg-12" style="margin-bottom: 20px">
						<div class="form-group">
							<label>Status:</label>
							<select name="status" id="pet-select" class="form-control">
								<option value="disponible">Disponible</option>
								<option value="occupe">Occupé</option>
							</select>
						</div>
					</div>
			


					<div class="col-md-12" style="margin-bottom: 10px">
						<div class="form-group">
							<strong>prix_pax :</strong>
							<input type="number"name="prix_pax" placeholder="prix_pax" class="form-control"></textarea>
						</div>
					</div>


					
					<div class="col-md-12" style="margin-bottom: 10px">	
						<div class="form-group">
						  <label>Select</label>
						  <select class="form-control" name="type">
							<option value="chambre-reguliere">Chambre régulière</option>
							<option value="chambre-familiale">Chambre familiale</option>
							<option value="suite">Suite</option>
							<option value="chambres-communicantes">Chambres communicantes</option>
							<option value="chambres-voisines">Chambres voisines</option>
						  </select>
						</div>
					  </div>


					<div class="col-md-12" style="margin-bottom: 20px">
					<div class="form-group">

					@foreach($commodites as $key => $commodite)
					<div class="form-check form-check-inline">	
						<label class="radio-inline"><input class="form-check-input" type="checkbox" name="commodites_icon[]"  value="{{$commodite->id}}">
							<img width="24" height="24" src="/images/commodites_icon/{{ $commodite->icon }}" class="loaded">
							</label>
						<label>	{{$commodite->nom}}</label>	
					</div>
					@endforeach

					</div>
					</div>

				
					

					<div class="col-md-12" style="margin-bottom: 20px">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile" name="image">
							<label class="custom-file-label" for="customFile">Image</label>
					  	</div>
					</div>


					<div class="col-lg-12" style="margin-bottom: 20px">
						<div class="form-group">
							<strong>Image Preview:</strong>
							<div class="card">
							<div class="row"  id="preview_img">
							</div>
						</div>
					</div>
					

					<div class="col-lg-12">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				


			</form>





	  </div>
	</div>
  </div>

 


		 
  
  
            
            </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('scripts')
@endpush
