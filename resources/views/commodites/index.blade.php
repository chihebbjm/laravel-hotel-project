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
			<th> No </th>
			<th> Name </th>
			<th> Detail </th>
			<th> Action </th>
		</tr>
		@foreach($products as $key => $product)
			<tr>
				<td> {{ ++$i }} </td>
				<td> {{ $product->name }} </td>
				<td> {{ $product->detail }} </td>
				<td>
					<form action="{{ route('products.destroy', $product->id) }}" method="POST">
						<a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>
						<a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
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
				<a class="btn btn-success" data-toggle="modal" data-target="#exampleModal"> Create New Product</a>
			</div>
		</div>
	</div>




	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">
			  <h3> Add New Product </h3>
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
		
			<form action="{{ route('products.store') }}" method="POST">
				@csrf
				<div class="row">
					<div class="col-lg-12">
						<div class="form-group">
							<strong>Name:</strong>
							<input type="text" name="name" class="form-control" placeholder="Name">
						</div>
					</div>
		
					<div class="col-lg-12">
						<div class="form-group">
							<strong>Detail:</strong>
							<textarea name="detail" placeholder="Detail" class="form-control"></textarea>
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