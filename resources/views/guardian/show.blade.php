@extends('layouts.app')
@section('content')
	<div class="row content-justify-center">
		<div class="col-sm-6">
			<a href="/guardian" class="btn btn-sm btn-success">Return to guardian</a>
			<table class="table table-bordered">
				<tbody>
					<tr><th>name</th><td>{{$guardian->name}}</td></tr>
					<tr><th>phone</th><td>{{$guardian->phone}}</td></tr>
					<tr><th>kin</th><td>{{$guardian->kin}}</td></tr>
				</tbody>
			</table>
		</div>
	</div>
	<form action="/guardian/{{$guardian->id}}" method="POST">
		@csrf
		<input type="hidden" name="_method" value="DELETE">
		<a href="/guardian/{{$guardian->id}}/edit" class="btn btn-sm btn-warning">edit</a>
		<button type="submit" class="btn btn-sm btn-danger">Delete</button>
	</form>
	
@endsection