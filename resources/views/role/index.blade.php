@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-sm-12">
        <table class="table table-striped">
		 <thead>
		  <tr> 
		    <th>Role name</th>
		    <th>Action</th>
         </tr>
		</thead>
		<tbody>
          @foreach($roles as $role) 
         <tr>
     
           <td>{{$role->name}}</td>
           <td>
           <a href="/role/{{$role->id}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i>view</a>
    	   </td>
         </tr>
        @endforeach
        </tbody>
		</table>
    </div>
</div>
</div>
@endsection