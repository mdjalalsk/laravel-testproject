@extends('layouts.frontend')
{{-- jodi kno page a title na dai tahole layout ter title er second parameter a da defualt vale title a dakhabe  --}}
{{-- @section('title')
    About
@endsection --}}
@section('css')
    
@endsection
{{-- home page content not available  dakhanor jonno  necher section comment kore rakce  --}}
{{-- @section('content')
<h1>this is About</h1>
    
@endsection --}}

@section('sidebar')
@parent
<h1> this dynamic sidebar and append parent value </h1>

@endsection
@section('scripts')
    
@endsection