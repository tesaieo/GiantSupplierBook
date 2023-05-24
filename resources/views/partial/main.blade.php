<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>@yield('title')</title>
    
    @vite(['resources/js/app.js'])
</head>
<!-- justify-content-between biar ada space setiap itu -->
<body class="d-flex flex-column" style="min-height:100vh;">
    @include('partial/header')
    @include('partial/navbar')
    @yield('content')
    @include('partial/footer')
</body>
</html>