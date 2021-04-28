@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-sm-12">
        <table class="table table-striped">
		 <thead>
		  <tr> 
		    <th>phone_no</th>
		    <th>messages</th>
         </tr>
		</thead>
		<tbody>
          @foreach($smses as $sms) 
         <tr>
     
           <td>{{$sms->name}}</td>
           <td>
           <a href="/sms/{{$sms->id}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i>view</a>
    	   </td>
         </tr>
        @endforeach
        </tbody>
		</table>
    </div>
</div>
</div>
@endsection