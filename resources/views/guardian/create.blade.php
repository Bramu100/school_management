@extends('layouts.app')
@section('content')
	<div class="row content-justify-center">
		<div class="col-sm-6">
			<form action="/guardian" method="POST">
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
					<label>student</label>
					<select name="student_id" class="form-select">
						@foreach($students as $student)
						<option value="{{$student->id}}">
							{{$student->name}}
						</option>
						@endforeach
					</select>
				</div>
				<button type="submit" class="btn btn-sm btn-success">Save</button>
			</form>
		</div>
	</div>
@endsection