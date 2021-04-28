@extends('layouts.app')
@section('content')
	<div class="row content-justify-center">
		<div class="col-sm-6">
			<form action="/staff/{{$staff->id}}" method="POST">
				@csrf
				<input type="hidden" name="_method" value="PUT">
				<div class="form-group">
					<label>name</label>
					<input type="text" name="name" class="form-control" value="{{$staff->name}}">
				</div>
				<div class="form-group">
					<label>phone</label>
					<input type="text" name="phone" class="form-control"value="{{$staff->phone}}">
				</div>
				<div class="form-group">
					<label>email</label>
					<input type="text" name="email" class="form-control"value="{{$staff->email}}">
				</div>
				<button type="submit" class="btn btn-sm btn-success">update</button>
			</form>
		</div>
	</div>
@endsection