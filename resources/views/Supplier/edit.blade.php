@extends('layouts.app')
@section('content')
    <h1 class="header">Edit {{$supplier->name}}'s Details</h1>

<form method="post" action="{{route('supplier.update', $supplier->id)}}">
      @csrf
      {{ method_field('patch') }}
      <label>Name</label><input type="text" name="name" value="{{$supplier->name}}" class="form-control">  

      <input type="submit" class="btn btn-primary btn-outline" value="Save Changes">
    </form>


@endsection