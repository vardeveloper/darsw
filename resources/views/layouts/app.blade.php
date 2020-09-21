<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'COMMERCIAL DESIGN | RESIDENTIAL DESIGN | INTERIOR DESIGN | DARSW')</title>
        <meta name="description" content="@yield('meta_description', 'COMMERCIAL DESIGN | RESIDENTIAL DESIGN | INTERIOR DESIGN')"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/color.css') }}">
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    </head>
    <body>
        <div class="loader-wrap color-bg">
            <div class="loader-bg"></div>
            <div class="loader-inner">
                <div class="loader"></div>
            </div>
        </div>

        <div id="main">
            @include('includes.header')
            
            @yield('content')

            <div class="element">
                <div class="element-item"></div>
            </div>       
        </div>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>