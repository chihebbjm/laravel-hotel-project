@extends('admin.layouts.app')

@section('title','Galerie')

@push('css')

@endpush

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
       
        <!-- Main content -->
        <div class="content">



<div class="row" style="padding-top: 10px">
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
						<i class="fa fa-plus" aria-hidden="true">
							image galerie
						</i>
					</button>
				</div>
			</div>
		</div>


		<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">	
	
	
			<tr>
			<th>Image</th>
			<th> No </th>
			<th> Titre </th>
			<th> Tag </th>
			<th> Action </th>
		</tr>
		<tbody>
		@foreach($galeries as $key => $img)
		<tr>

				<td>
				<img width="100" height="100" src="/images/{{ $img->image }}" class="loaded" alt="icon" >
				</td>
				<td style="text-align: center; vertical-align: middle;"> {{ ++$i }} </td>
				<td style="text-align: center; vertical-align: middle;"> {{ $img->titre }} </td>
				<td style="text-align: center; vertical-align: middle;"> {{ $img->tag }} </td>

				<td style="text-align: center; vertical-align: middle;">
					<form action="{{ route('galerie.destroy', $img->id) }}" method="POST">
						<a class="btn btn-primary" href="{{ route('galerie.edit', $img->id) }}">Edit</a>
						@csrf
						@method('DELETE')
						<button type="submit"  onclick="return confimeDelete();" class="btn btn-danger">Delete</button>
					</form>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>


	<div id="pagintion" class="row-pull-right" >
			<div class="pull-right" style="margin-left: 20px">
				<div class="pull-right">{{ $galeries->links() }}</div>
			
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
			  <h3> Ajouter Image</h3>
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
		
			<form action="{{ route('galerie.store') }}" method="POST" enctype="multipart/form-data" >
				@csrf
				<div class="row">
					<div class="col-lg-12" style="margin-bottom: 20px">
						<div class="form-group">
							<label>titre:</label>
							<input type="text" name="titre" class="form-control" placeholder="titre">
						</div>
					</div>
		
					<div class="col-sm-12" style="margin-bottom: 20px">
						<div class="form-group">
							<label>Tag:</label>
							<select name="tag" id="pet-select" class="form-control">
								<option value="activites">Activites</option>
								<option value="restaurant">Restaurant</option>
								<option value="suite">Suite</option>
								<option value="vue-mer">Vue mer</option>
							</select>
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
