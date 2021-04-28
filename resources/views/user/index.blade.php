@extends('layouts.app')
@section('css')
<style type="text/css">
	td,th{
		color: red;
	}
</style>
@endsection

@section('content')
<div class="container">
	<div class="row content-justify-center">
		<div class="col-sm-6">
			<table class="table table-bordered">
				<thead>
					<tr> 
      
						<th>name</th>
						<th>phone</th>
						<th>email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{$user->name}}</td>
						<td>{{$user->phone}}</td>
						<td>{{$user->email}}</td>
						
						<td><a href="/user/{{$user->id}}" class="btn btn-sm btn-success">View</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	</div>
@endsection