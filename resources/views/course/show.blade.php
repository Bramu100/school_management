@extends('layouts.app')
@section('content')
	<div class="row content-justify-center">
		<div class="col-sm-6">
			<a href="/course" class="btn btn-sm btn-success">Return to courses</a>
			<table class="table table-bordered">
				<tbody>
					<tr><th>Title</th><td>{{$course->title}}</td></tr>
					<tr><th>Description</th><td>{{$course->description}}</td></tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection