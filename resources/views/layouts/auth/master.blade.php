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
    <body class="antialiased bg-black">
      @include('layouts.header')
      <div class="grid grid-cols-2">
        <div class="col-span-2 lg:col-span-1 relative h-50vh lg:h-screen">
          <img
            srcset="/assets/images/mobile-auth-bg.png 480w, /assets/images/auth-bg.png 800w"
            sizes="(max-width: 600px) 480px,
                  800px"
            src="/assets/images/auth-bg.png"
            alt="Background" class="w-full h-full object-cover"/>
          <img src="/assets/images/iLASSO.png" alt="iLASSO" class="absolute lg:right-0 lg:top-2/4 lg:-translate-y-2/4 h-full lg:h-3/4 rotate-90 lg:rotate-0 bottom-0 left-2/4 lg:left-auto -translate-x-2/4 lg:translate-x-1 translate-y-2/4">
        </div>
        <div class="col-span-2 lg:col-span-1">
          <div class="flex justify-center mx-auto content-center items-center w-360px min-h-screen">
            @yield('content')
          </div>
        </div>
      </div>
      @vite('node_modules/jquery/dist/jquery.min.js')
      @include('js.main-js')
      @yield('script')
    </body>
</html>
