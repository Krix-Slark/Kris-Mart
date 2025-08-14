<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    @yeild('css')
</head>
<body>
     @yield('layouts.navbar')
    @yield('content')
    @include('layouts.footer')


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @yield('script')
</body>
</html>