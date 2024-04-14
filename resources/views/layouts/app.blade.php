<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel=”icon” href="images/Uib7U047mqg.jpg” type=”image/x-icon">.

    <title>@yield('title')</title>
    @yield('styles')
    {{--    @vite('resources/js/app.js')--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @vite('resources/css/app.sass')
    @vite('resources/js/app.js')

</head>
<body class="wrapper">
@section('title', 'Изготовим кофры 🚀 и кейсы любых размеров в Москве')
@yield('content')
@yield('footer')

</body>
</html>
