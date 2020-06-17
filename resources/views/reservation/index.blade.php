@extends('admin.layouts.app')

@section('title','Reservation')

@push('css')

@endpush

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
       
        <!-- Main content -->
        <div class="content">






<div class="card-body">
	<div class="card" style="margin-right:40px;margin-left:40px;">
	<table id="example2" class="table table-bordered"  aria-describedby="example2_info">
	

		
<tr>
	
		<th> No </th>
		<th> nom </th>
		<th> prenom </th>
		<th> telephone </th>
		<th>details</th>
	</tr>
	@foreach($reservation as $key => $info)
	<tr>
			
			<td> {{ ++$i }} </td>
			<td> {{ $info->nom }} </td>
			<td> {{ $info->prenom }} </td>
			<td> {{ $info->telephone }} </td>
			<td>
			<button class="btn btn-success" data-toggle="modal" data-target="#detailsmodal" 
				data-email="{{$info->email}}"
				data-date_arrivee="{{$info->date_arrivee}}"
				data-date_depart="{{$info->date_depart}}"
				data-nb_adultes="{{$info->nb_adultes}}"
				data-nb_enfants="{{$info->nb_enfants}}"
				data-demande_supp="{{$info->demande_supp}}"> 

					details
				</button>

			</td>
			
		</tr>
	@endforeach
</table>

<div id="pagintion" class="row-pull-right" >
	<div class="pull-right" style="margin-left: 20px">
		<div class="pull-right">{{ $reservation->links() }}</div>
	
</div>
</div>



	</div>
</div>



						
<div class="modal fade" modal-dialog-scrollable id="detailsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
	<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">
			<h3> Detaills </h3>
		</h5>
		<label type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</label>
		</div>
		<div class="modal-body">
			
			<div class="row">

				<div class="col-lg-12" style="margin-bottom: 10px">
					<div class="form-group">
						<label>Email:</label>
						<input name="email" type="text" class="form-control" id="email"  disabled="">
			
					</div>
				</div>



				<div class="col-lg-12" style="margin-bottom: 10px">
					<div class="form-group">
					<label>Date_arrivee:</label>
					<input type="text" class="form-control" placeholder="" id="date_arrivee" disabled="">
				
					</div>
				</div>

				<div class="col-lg-12" style="margin-bottom: 10px">
					<div class="form-group">
						<label>Date_depart:</label>
						<input type="text" class="form-control" placeholder="" id="date_depart" disabled="">

					</div>
				</div>

				<div class="col-lg-12" style="margin-bottom: 10px">
					<div class="form-group">
						<label>nombre d'adultes</label>
						<input type="text" class="form-control" placeholder="" id="nb_adultes" disabled="">

					</div>
				</div>

				<div class="col-lg-12" style="margin-bottom: 10px">
					<div class="form-group">
						<label>nombre d'enfant:</label>
						<input type="text" class="form-control" placeholder="" id="nb_enfants" disabled="">

					</div>
				</div>

				<div class="col-lg-12" style="margin-bottom: 10px">
					<div class="form-group">
						<label>demande supplémentaire:</label>
						<input type="text" class="form-control" placeholder="" id="demande_supp" disabled="">

					</div>
				</div>



		</div>

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
