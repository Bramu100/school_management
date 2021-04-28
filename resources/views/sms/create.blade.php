@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-10">
		<form action="/sms" method="POST">
		@csrf
		<div class="form-group">
		<label>Phone number</label>
		<input type="text" name="phone_no" class="form-control">
		</div>
		<div class="form-group">
		<label>Message</label>
		<textarea class="form-control" name="messages" rows="5" placeholder="Write your message here"></textarea>
		</div>		
		<div class="form-group">
		<button type="submit" class="btn btn-sm btn-success">Send message</button>
		</div>
		</form>
		</div>
	</div>
</div>
@endsection