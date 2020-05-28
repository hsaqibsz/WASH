@extends('layouts.app')
@section('content')
    <h1 class="header">Register New Supplier </h1>

<form method="post" action="{{route('supplier.store')}}">
      @csrf
      
      <label>Name</label><input type="text" name="name"   class="form-control">
      

      <input type="submit" class="btn btn-primary btn-outline" value="Add">
    </form>


@endsection