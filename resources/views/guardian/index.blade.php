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
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>name</th>
						<th>phone</th>
						<th>student</th>
					</tr>
				</thead>
				<tbody>
					@foreach($guardians as $guardian)
					<tr>
						<td>{{$guardian->name}}</td>
						<td>{{$guardian->phone}}</td>
						<td>{{$guardian->student_id}}</td>
						<td><a href="/guardian/{{$guardian->id}}" class="btn btn-sm btn-success">View</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection