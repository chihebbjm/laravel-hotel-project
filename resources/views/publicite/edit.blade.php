@extends('admin.layouts.app')

@section('title','Edit Publicite')

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



	<div class="row" style="padding: 15px">
		<div class="col-md-6">
			<div>
				<h3> Modifer Publicite </h3>
			</div>
			<div >
				<a class="btn btn-success" href="{{ route('publicite.index') }}"> 
					<i class="fa fa-chevron-left" aria-hidden="true">
						 List Publicite
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







	<form  action="{{ route('publicite.update', $publicite->id) }}" method="POST" enctype="multipart/form-data">
		@csrf
		@method("PUT")
		<div class="row" style="padding:15px">
			<div class="col-md-12">
				<div class="form-group">
					<strong>Titre:</strong>
					<input type="text" name="titre" value="{{ $publicite->titre }}" class="form-control" placeholder="Titre">
				</div>
			</div>
		</div>
			<div class="row" style="padding:15px">
				<div class="col-md-12">
					<div class="form-group">
						<strong>Proprietaire:</strong>
						<input type="text" name="proprietaire" value="{{ $publicite->titre }}" class="form-control" placeholder="Proprietaire">
					</div>
				</div>
			</div>
	
		
			<div class="row" style="padding:15px">
			<div class="col-md-12" >
				<label>Uploud Image</label>
			</div>
			</div>
			
			<div class="row" style="padding:15px">
			<div class="col-md-12" >
				<div class="form-group">
					<label class="custom-file-label" for="customFile" style="margin-bottom: 20px">Select Image</label>
					<input type="file" class="custom-file-input" id="customFile" name="image" />
				</div>
			</div>
			</div>

			<div class="row" style="padding:15px">
			<div class="col-md-12">
				<div class="form-group">
					<strong>Image Preview:</strong>
					<div class="card">
					<div class="row"  id="preview_img">
					</div>
				</div>
			</div>
			</div>
			
			<div class="row" style="padding:15px">
			<div class="col-md-12">
				
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










