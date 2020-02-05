@extends('layouts.master')
@section('content')
<h2>New Student Id Create Here</h2>
<hr><br><br>
<form method="post" action="{{ route('update', $student->id) }}">
{{ csrf_field() }}
  <div class="form-group">
    <input type="num" class="form-control" id="registration_id" name="registration_id" aria-describedby="emailHelp" value="{{$student->registration_id}}">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{$student->name}}">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="department" name="department" aria-describedby="emailHelp" value="{{$student->department}}">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="details" name="details" aria-describedby="emailHelp" value="{{$student->details}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
