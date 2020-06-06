@extends('adminlte.dashboard')
@section('content')
	


<div class="card-body">
	<div class="card" style="margin-right:40px;margin-left:40px;">
	<table id="example2" class="table table-bordered"  aria-describedby="example2_info">
	

		
<tr class="table">
	
		<th> No </th>
		<th> nom </th>
		<th> prenom </th>
		<th> telephone </th>

	</tr>
	@foreach($reservation as $key => $info)
	<tr class="table-light">
			
			<td> {{ ++$i }} </td>
			<td> {{ $info->nom }} </td>
			<td> {{ $info->prenom }} </td>
			<td> {{ $info->telephone }} </td>
			
			
		</tr>
	@endforeach
</table>



	</div>
</div>





  <!-- Edit Modal -->

@endsection