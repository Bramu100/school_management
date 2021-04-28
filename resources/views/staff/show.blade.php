@extends('layouts.app')
@section('content')
	<div class="row content-justify-center">
		<div class="col-sm-6">
			<a href="/staff" class="btn btn-sm btn-success">Return to staff</a>
			<table class="table table-bordered">
				<tbody>
					<tr><th>name</th><td>{{$staff->name}}</td></tr>
					<tr><th>phone</th><td>{{$staff->phone}}</td></tr>
					<tr><th>email</th><td>{{$staff->email}}</td></tr>
				</tbody>
			</table>
		</div>
	</div>
	<form action="/staff/{{$staff->id}}" method="POST">
		@csrf
		<input type="hidden" name="_method" value="DELETE">
		<a href="/staff/{{$staff->id}}/edit" class="btn btn-sm btn-warning">edit</a>
		<button type="submit" class="btn btn-sm btn-danger">Delete</button>
	</form>
	
@endsection