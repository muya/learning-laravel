<!DOCTYPE html>
<html>
    <head>
        <title>Learning Laravel</title>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/materialize.min.css') }}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/custom.min.css') }}"  media="screen,projection"/>

        @yield('header')
    </head>
    <body>
        @include('layouts.nav')
        <div class="container">
            @yield('overallContent')
        </div>
        <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-2.1.3.min.js')}}"></script>
        <script type="text/javascript" src="{{ URL::asset('assets/js/materialize.min.js') }}"></script>
    </body>
</html>
