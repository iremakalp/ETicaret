<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title',config('app.name'))</title>
    @include('layouts.partials.head')
    @yield('head')
</head>
<body>
@include('layouts.partials.navbar')
@yield('content')
@include('layouts.partials.footer')
<!-- jQuery Plugins -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/nouislider.min.js"></script>
<script src="/js/jquery.zoom.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/app.js"></script>
@yield('footer')
</body>
</html>
