@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row content-justify-center">
		<div class="col-sm-6">
			<table class="table table-bordered">
				<tbody>
					<tr><th>name</th><td>{{$user->name}}</td></tr>
					<tr><th>phone</th><td>{{$user->phone}}</td></tr>
					<tr><th>email</th><td>{{$user->email}}</td></tr>
					<tr><th>password</th><td>{{$user->password}}</td></tr>
				</tbody>
			</table>
		</div>
	</div>
	<form action="/user/{{$user->id}}" method="POST">
		@csrf
		<input type="hidden" name="_method" value="DELETE">
		<a href="/user/{{$user->id}}/edit" class="btn btn-sm btn-warning">edit</a>
		<button type="submit" class="btn btn-sm btn-danger">Delete</button>
	</form>
	</div>
@endsection