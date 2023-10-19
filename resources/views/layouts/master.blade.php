<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>iLasso</title>

        <link rel="stylesheet" href="/assets/font/Inter/inter.css">
        @vite('resources/css/app.css')
        @yield('css')
    </head>
    <body class="antialiased bg-gray-100 pt-32">
      @include('layouts.header')
      @yield('content')
      @include('layouts.footer')
      @vite('node_modules/jquery/dist/jquery.min.js')
      @include('js.main-js')
      @yield('script')
    </body>
</html>
