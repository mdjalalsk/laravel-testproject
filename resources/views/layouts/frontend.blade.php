<!DOCTYPE html>
<html lang="en">
<head>
      {{-- CSRF --}}
        <meta name="csrf-token" content="<?php echo csrf_token(); ?>" id="token">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('build/assets/css/bootstrap.min.css')}}">
    {{-- jodi kno page a titile na thake tahole second parameter a  website lakha show korbe  --}}
    <title>Parctice - @yield('title' ,"website")</title>
    @yield("css")
</head>
<body>
    <div class="container">
    @include('layouts.nav')

    {{-- @yield("content" ," <h1> no content available</h1>")--}} {{--jodi ai vabe dakhi thole page h1 tag shaho show korbe/ h1 na dele h1 dakhabe na but amra ha/heading tag use korta hoila nechaar has-section  use korta hobe --}}
    @hasSection ('content')
    @yield("content")
    @else
        <h3>no content available</h3>
    @endif

    @section('sidebar')
        
    <h1>this parent layout  value</h1>
    @show
    
    <script src="{{ asset("build/assets/js/bootstrap.bundle.min.js") }}"></script>
    @yield("scripts")
</div>
</body>
</html>