@extends('layouts.frontend')
@section('title')
   Service
@endsection
@section('css')
    
@endsection
@section('content')
<h1> this is service</h1>
@php
    $fruits = ["apple", "banana", "orange", ];
@endphp
@include('frontend.includepage',['fruits' => $fruits])
<button class="btn btn-primary">test css</button>
    
@endsection
@section('scripts')
    
@endsection