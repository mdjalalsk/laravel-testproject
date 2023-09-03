@extends('layouts.frontend')
@section('title')
    Teacher
@endsection
@section('css')
    
@endsection
@section('content')
<h1>this is teacher</h1>
<a href="{{route('addTeacher')}}" class="btn btn-primary m-3" >Add Teacher</a>

   <table class="table table-dark table-striped-columns">
 <tr>
    <th>ID</th>
    <th>name</th>
    <th>email</th>
    <th>address</th>
    <th>Action</th>
 </tr>
    @foreach ($teacher as $id=>$tc)
    <tr>
    <td>{{$tc->id}}  </td>
    <td>{{$tc->name}} </td> 
    <td>{{$tc->email}} </td>
    <td>{{$tc->address}}</td>
    <td><a href="{{route('delete',$tc->id)}}" class="btn btn-danger">Delete</a></td>
</tr>
@endforeach

</table>
@endsection
@section('scripts')
    
@endsection