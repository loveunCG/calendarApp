<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('public/css/base.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('public/css/header.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('public/css/common.css') }}" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<script src="{{ asset('public/js/jquery.min.js') }}" ></script>
<script src="{{ asset('public/js/bootstrap.min.js') }}" ></script>
@stack('scripts')

</html>
