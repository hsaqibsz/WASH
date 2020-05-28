
@extends("layouts.app")
@section('content')

<h1>Suppliers List &nbsp; &nbsp; <a href="{{route('supplier.create')}}" class="btn btn-outline btn-success">Add New Supplier</a></h1>

<table class="table table-hover">
	<tr>
		<th>Name</th>
		<th>Edit</th>
		<th>Delete</th>
		@foreach($suppliers as $s)
      <tr>
		<td>{{$s->name}}</td>
		<td><a href="{{route('supplier.edit', $s->id)}}"><i class="glyphicon glyphicon-edit"></i></a></td>
		<td> 
	        <form method="post" action="{{route('supplier.destroy', $s->id)}}">
	          @csrf
	          {{method_field('DELETE')}}
	          
	         <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash white"></i></button>
	       </form>
		</td>
       </tr>
		@endforeach

</table>

@endsection

