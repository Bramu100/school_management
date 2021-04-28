@extends('layouts.app')
@section('content')
	<div class="row content-justify-center">
		<div class="col-sm-6">
			<form action="/student/{{$student->id}}" method="POST">
				@csrf
				<input type="hidden" name="_method" value="PUT">
				<div class="form-group">
					<label>name</label>
					<input type="text" name="name" class="form-control" value="{{$student->name}}">
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
					<label>reg_no</label>
					<input type="text" name="reg_no" class="form-control"value="{{$student->reg_no}}">
				</div>
				<button type="submit" class="btn btn-sm btn-success">update</button>
			</form>
		</div>
	</div>
@endsection