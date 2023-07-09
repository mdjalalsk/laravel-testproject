<!DOCTYPE html>
<html lang="en">
<head>
      {{-- CSRF --}}
        <meta name="csrf-token" content="<?php echo csrf_token(); ?>" id="token">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('build/assets/css/bootstrap.min.css')}}">
    <title>Frontend</title>
    @yield("css")
</head>
<body>
    <div class="container">
    @include('layouts.nav')

    @yield("content")
    
    <script src="{{ asset("build/assets/js/bootstrap.bundle.min.js") }}"></script>
    @yield("scripts")
</div>
</body>
</html>