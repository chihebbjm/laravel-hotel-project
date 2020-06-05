@extends('adminlte.dashboard')
@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Show Product </h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('products.index') }}"> Back to Product List </a>
			</div>
		</div>
	</div>

	<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<strong>Name:</strong>
					{{ $product->name }}
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Detail:</strong>
					{{ $product->detail }}
				</div>
			</div>
	</div>
@endsection