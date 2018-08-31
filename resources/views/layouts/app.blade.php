<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.__head')
</head>
<body>
    <div id="app">
        <main class="py-4">
        <div id="wrapper">
            @include('partials.__nav')

            <div id="page-content-wrapper">
                @include('partials.__topmenu')
                @yield('content')
                @include('partials.__footer')
            </div>
        </div>
        </main>
    </div>
</body>
@include('partials.__javascript')
@yield('javascript')
</html>
