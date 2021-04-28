@extends('layouts.app')
@section('css')
<style type="text/css">
	td,th{
		color: red;
	}
</style>
@endsection

@section('content')
	<div class="row content-justify-center">
		<div class="col-sm-6">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Title</th>
						<th>Description</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($courses as $course)
					<tr>
						<td>{{$course->title}}</td>
						<td>{{$course->description}}</td>
						<td><a href="/course/{{$course->id}}" class="btn btn-sm btn-success">View</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection