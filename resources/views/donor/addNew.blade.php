@extends('layouts.app')
@section('content')
    <h1 class="header">Register New Donor</h1>

<form method="post" action="{{route('donor.store')}}">
      @csrf
      
      <label>Name</label><input type="text" name="name"   class="form-control">
      

      <input type="submit" class="btn btn-primary btn-outline" value="Add">
    </form>


@endsection