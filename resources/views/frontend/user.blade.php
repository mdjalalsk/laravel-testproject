@extends('layouts.frontend')
@section('css')  
@endsection

@section('content')
{{$users->links()}}
<h1>This is User</h1>
<ul>
    @foreach ($users as $item)
    <li>{{$item->name}}||{{$item->email}}</li>
        
    @endforeach
    <div class="mt-5">
        {{$users->links()}}
    </div>
 
</ul>
    
@endsection

@section('scripts')
    
@endsection