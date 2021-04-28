@extends('layouts.app')
@section('content')
	<div class="row content-justify-center">
		<div class="col-sm-6">
			<form action="/staff" method="POST">
				@csrf
				<div class="form-group">
					<label>name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>phone</label>
					<input type="text" name="phone" class="form-control">
				</div>
				<div class="form-group">
					<label>email</label>
					<input type="text" name="email" class="form-control">
				</div>
				<button type="submit" class="btn btn-sm btn-success">Save</button>
			</form>
		</div>
	</div>
@endsection