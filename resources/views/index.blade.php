@extends('layouts.master')
@section('content')
    <div class="student-table">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Serial Number</th>
                <th scope="col">Department Id</th>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Details</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @php $i = 0; @endphp
             @foreach ($students as $student)
             @php $i++ ; @endphp
              <tr>
                <th scope="row">{{ $i }}</th>
                <td>{{ $student->registration_id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->department }}</td>
                <td>{{ $student->details }}</td>
                <td>
                  <a href="{{route('edit', $student->id)}}">Edit</a> ||

               <form class="form-inline" action="{{route('delete', $student->id)}}" method="post">
                  {{ csrf_field() }}
                  <input type="submit" value="Delete">
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    @endsection