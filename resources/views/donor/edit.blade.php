@extends('layouts.app')
@section('content')
    <h1 class="header">Edit {{$donor->name}}'s Details</h1>

<form method="post" action="{{route('donor.update', $donor->id)}}">
      @csrf
      {{ method_field('patch') }}
      <label>Name</label><input type="text" name="name" value="{{$donor->name}}" class="form-control">  

      <input type="submit" class="btn btn-primary btn-outline" value="Save Changes">
    </form>


@endsection