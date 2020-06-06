@extends('adminlte.dashboard')
@section('content')
	


<div class="card-body">
	<div class="card" style="margin-right:40px;margin-left:40px;">
	<table id="example2" class="table table-bordered"  aria-describedby="example2_info">
	

		
<tr class="table">
	
		<th> No </th>
		<th> nom </th>
		<th> email </th>
		<th> message </th>

	</tr>
	@foreach($contact as $key => $info)
	<tr class="table-light">
			
			<td style="text-align: center; vertical-align: middle;" > {{ ++$i }} </td>
			<td style="text-align: center; vertical-align: middle;" > {{ $info->nom }} </td>
			<td style="text-align: center; vertical-align: middle;" > {{ $info->email }} </td>
			<td style="text-align: center; vertical-align: middle;" > {{ $info->message }} </td>
			
			
		</tr>
	@endforeach
</table>



	</div>
</div>





  <!-- Edit Modal -->

@endsection