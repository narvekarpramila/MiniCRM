<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 
    <meta charset="utf-8">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content=" Divisima | eCommerce Template">
    <meta name="keywords" content="divisima, eCommerce, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">



</head>
<body>
    <div id="app">
            @include('layouts.navigation')
            @yield('content')

    </div>
</body>
</html>
