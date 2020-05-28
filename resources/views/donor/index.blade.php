
@extends("layouts.app")
@section('content')

<h1>Users List &nbsp; &nbsp; <a href="{{route('donor.create')}}" class="btn btn-outline btn-success">Add New User</a></h1>

<table class="table table-hover">
	<tr>
		<th>Name</th>
		<th>Edit</th>
		<th>Delete</th>
		@foreach($donors as $donor)
      <tr>
		<td>{{$donor->name}}</td>
		<td><a href="{{route('donor.edit', $donor->id)}}"><i class="glyphicon glyphicon-edit"></i></a></td>
		<td> 
	        <form method="post" action="{{route('donor.destroy', $donor->id)}}">
	          @csrf
	          {{method_field('DELETE')}}
	          
	         <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash white"></i></button>
	       </form>
		</td>
       </tr>
		@endforeach

</table>

@endsection

