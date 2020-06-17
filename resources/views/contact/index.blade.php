@extends('admin.layouts.app')

@section('title','Contact')

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
		<th> email </th>
		<th> message </th>

	</tr>
	@foreach($contact as $key => $info)
	<tr>
			
			<td> {{ ++$i }} </td>
			<td> {{ $info->nom }} </td>
			<td> {{ $info->email }} </td>
			<td> {{ $info->message }} </td>
			
			
		</tr>
	@endforeach
</table>


<div id="pagintion" class="row-pull-right" >
	<div class="pull-right" style="margin-left: 20px">
		<div class="pull-right">{{ $contact->links() }}</div>
	
</div>
</div>




   
            </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('scripts')
@endpush
