@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-10">
		<form action="/role" method="POST">
		@csrf
		<div class="form-group">
		<label>Role</label>
		<input type="text" name="name" class="form-control">
		</div>		
		<div class="form-group">
		<button type="submit" class="btn btn-sm btn-success">Save</button>
		</div>
		</form>
		</div>
	</div>
</div>
@endsection