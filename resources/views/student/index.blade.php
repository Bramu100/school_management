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
						<th>course</th>
						<th>reg_no</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($students as $student)
					<tr>
						<td>{{$student->name}}</td>
						<td>{{$student->course->title}}</td>
						<td>{{$student->reg_no}}</td>
						<td><a href="/student/{{$student->id}}" class="btn btn-sm btn-success">View</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	</div>
@endsection