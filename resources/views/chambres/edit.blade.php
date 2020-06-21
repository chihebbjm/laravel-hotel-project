@extends('admin.layouts.app')

@section('title','Edit Chambre')

@push('css')

@endpush

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
       
        <!-- Main content -->
        <div class="content">



<div class="card-body bg-light" style="padding-top:50px">
	<div class="card" style="margin-right:40px;margin-left:40px;">
	<div style="background: white">

	
	<div class="row" style="padding: 30px">
		<div class="col-md-6">
			<div>
				<h3> Modifer chambres </h3>
			</div>
			<div >
				<a class="btn btn-success" href="{{ route('chambres.index') }}"> Back to chambres List </a>
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







	<form  action="{{ route('chambres.update', $chambre->id) }}" method="POST" enctype="multipart/form-data">
		@csrf
		@method("PUT")
		<div class="row" style="padding:30px">
			<div class="col-md-12" style="margin-bottom: 20px">
				<div class="form-group">
					<strong>Nom :</strong>
					<input type="text" name="nom" value="{{ $chambre->nom }}" class="form-control" placeholder="Name">
				</div>
			</div>

			<div class="col-md-12" style="margin-bottom: 20px">
				<div class="form-group">
					<strong>Description :</strong>
					<textarea name="description" placeholder="description" class="form-control">{{ $chambre->description }}</textarea>
				</div>
			</div>


			<div class="col-md-12" style="margin-bottom: 20px">
				<div class="form-group">
					<label>Status:</label>
					<select name="status" id="pet-select" class="form-control">
						<option value="disponible">Disponible</option>
						<option value="occupe">Occupé</option>
					</select>
				</div>
			</div>




			<div class="col-md-12" style="margin-bottom: 20px">
				<div class="form-group">
					<strong>Prix_pax :</strong>
					<input type="number" value="{{ $chambre->prix_pax }}" name="prix_pax" placeholder="prix" class="form-control"></textarea>
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


				

				
				<div class="col-md-12" style="margin-bottom: 10px">
					
					<div class="form-group">
					  <label>Type chambre</label>
					  <select class="form-control" name="type">
						<option value="chambre-reguliere">Chambre régulière</option>
						<option value="chambre-familiale">Chambre familiale</option>
						<option value="suite">Suite</option>
						<option value="chambres-communicantes">Chambres communicantes</option>
						<option value="chambres-voisines">Chambres voisines</option>
					  </select>
					</div>
				  </div>

				  <div class="col-lg-12" >
				  <label>Uploud Image</label>
				  </div>

				  <div class="col-lg-12" style="margin-bottom: 20px;margin-left:10px">
					<div class="form-group">
						<label class="custom-file-label" for="customFile" style="margin-bottom: 20px">Select Image</label>
						<input type="file" class="custom-file-input" id="customFile" name="image" />
					</div>
				</div>

				  <div class="col-lg-12" style="margin-bottom: 20px;margin-left:10px">
					<div class="form-group">
						<strong>Image Preview:</strong>
						<div class="card">
						<div class="row"  id="preview_img">
						</div>
					</div>
				</div>



			<div class="col-lg-12" >
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
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













