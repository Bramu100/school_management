@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row content-justify-center">
		<div class="col-sm-6">
			<form action="/student" method="POST">
				@csrf
				<div class="form-group">
					<label>student name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Course</label>
					<select name="course_id" class="form-select">
						@foreach($courses as $course)
						<option value="{{$course->id}}">
							{{$course->title}}
						</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>reg no</label>
					<input type="text" name="reg_no" class="form-control">
				</div>
				<button type="submit" class="btn btn-sm btn-success">Save</button>
			</form>
		</div>
	</div>
	</div>
@endsection