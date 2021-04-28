@extends('layouts.app')
@section('css')
<style type="text/css">
	td,th{
		color: red;
	}
</style>
@endsection

@section('content')
	<div class="row content-justify-center">
		<div class="col-sm-6">
			<a href="/staff/create" class="btn btn-sm btn-success">Create Staff</a>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>name</th>
						<th>phone</th>
						<th>email</th>
					</tr>
				</thead>
				<tbody>
					@foreach($staffs as $staff)
					<tr>
						<td>{{$staff->name}}</td>
						<td>{{$staff->phone}}</td>
						<td>{{$staff->email}}</td>
						<td><a href="/staff/{{$staff->id}}" class="btn btn-sm btn-success">View</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection