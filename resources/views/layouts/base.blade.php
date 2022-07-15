<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-page')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://kit.fontawesome.com/6a19c75f45.js" crossorigin="anonymous"></script>
    @yield('style-css')
</head>
<body>
    @include('partials.header')
    @include('partials.hero')
    @yield('main-content')
    @include('partials.footer')
</body>
</html>