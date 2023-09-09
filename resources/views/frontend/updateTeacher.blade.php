@extends('layouts.frontend')
@section('title')
    Teacher
@endsection
@section('css')
    <style>
        #add-form{
            width: 500px;
            margin: 10px auto;
            background-color: gray;
        }
        label,input{
           margin: 5px;
            width:150px;
            padding: 5px;
         }
         .btn{
        margin-left: 50px;
         }
    </style>
@endsection
@section('content')

<form action="{{route('updateTeacher', $tc->id)}}" method="POST" id='add-form'>
    <legend class="text-center text-warning">Edit Teacher</legend>
    @csrf
    <label>Name</label>
    <input type="text" name="name" value="{{$tc->name}}"><br>
    <label>Email</label>
    <input type="email" name="email"  value="{{$tc->email}}"><br>
    <label>Address</label>
    <input type="text" name="address" value="{{$tc->address}}" ><br>
<div class="d-flex items-center justify-center my-4">
    <button class="btn btn-primary">Update</button>
</div>
</form>
@endsection
@section('scripts')
    
@endsection