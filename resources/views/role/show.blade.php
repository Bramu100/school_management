@extends('layouts.app')
@section('content')
	<div class="row content-justify-center">
		<div class="col-sm-6">
			<a href="/student" class="btn btn-sm btn-success">Return to student</a>
			<table class="table table-bordered">
				<tbody>
					<tr><th>name</th><td>{{$student->name}}</td></tr>
					<tr><th>course</th><td>{{$student->course->title}}</td></tr>
					<tr><th>reg_no</th><td>{{$student->reg_no}}</td></tr>
				</tbody>
			</table>
		</div>
	</div>
	<form action="/student/{{$student->id}}" method="POST">
		@csrf
		<input type="hidden" name="_method" value="DELETE">
		<a href="/student/{{$student->id}}/edit" class="btn btn-sm btn-warning">edit</a>
		<button type="submit" class="btn btn-sm btn-danger">Delete</button>
	</form>
	
@endsection