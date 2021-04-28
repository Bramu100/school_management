@extends('layouts.app')
@section('content')
<div class="container">

	<div class="row content-justify-center">
		<div class="col-sm-12">
			<form action="/user/{{$user->id}}" method="POST">
				@csrf
				<input type="hidden" name="_method" value="PUT">
				<div class="form-group">
					<label>name</label>
					<input type="text" name="name" class="form-control" value="{{$user->name}}">
				</div>
				<div class="form-group">
				<label>Roles</label>
				<select name="role_id" class="form-control" id="role_id" required="required">
					@foreach($roles as $role)
					@if($role->id == $user->role_id)
					<option value="{{$role->id}}" selected="selected">{{$role->name}}</option>
					@else
					<option value="{{$role->id}}">{{$role->name}}</option>
					@endif
					@endforeach
				</select>
			</div>
				<div class="form-group">
					<label>phone</label>
					<input type="text" name="phone" class="form-control"value="{{$user->phone}}">
				</div>
				<div class="form-group">
					<label>email</label>
					<input type="text" name="email" class="form-control"value="{{$user->email}}">
				</div>
				<div class="form-group">
					<label>password</label>
					<input type="password" name="password" class="form-control"value="{{$user->password}}">
				</div>
				<div id="permissions">
				@foreach($permissions->chunk(4) as $chunk)
				<div class="row">
				   @foreach($chunk as $permission)
					<div class="col-sm-3">
					<div class="custom-control custom-switch">
						@if($user->hasPermissionTo($permission->name))
						<input type="checkbox" class="custom-control-input" id="{{implode('-',explode(' ',$permission->name))}}" name="permissions[]" value="{{$permission->name}}" checked="checked">
						@else
						<input type="checkbox" class="custom-control-input" id="{{implode('-',explode(' ',$permission->name))}}" name="permissions[]" value="{{$permission->name}}">
						@endif
						<label class="custom-control-label" for="{{implode('-',explode(' ',$permission->name))}}">{{ ucfirst($permission->name) }}</label>
					</div>
					</div>
				@endforeach
				</div>
				@endforeach
			</div>
				<button type="submit" class="btn btn-sm btn-success">update</button>
			</form>
		</div>
	</div>
	</div>
@endsection