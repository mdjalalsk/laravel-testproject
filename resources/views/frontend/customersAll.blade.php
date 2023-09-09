@extends('layouts.frontend')
@section('title')
    Customer
@endsection
@section('css')
    
@endsection
@section('content')
<h1>All Customer</h1>
<table class="table table-dark table-striped-columns">
    <tr>
       <th>ID</th>
       <th>name</th>
       <th>email</th>
       <th>address</th>
       <th>Action</th>
    </tr>
       @foreach ($customers as $cs)
       <tr>
       <td>{{$cs->id}}  </td>
       <td>{{$cs->name}} </td> 
       <td>{{$cs->email}} </td>
       <td>{{$cs->address}}</td>
       <td>Edit | Delete</td>
   
      
   </tr>
   @endforeach 
   
   </table>
   <div class="mt-5">
    {{$customers->links()}}
 </div>
    
@endsection
@section('scripts')
    
@endsection