<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    {{-- my css --}}
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <title>La Molisana</title>
</head>
<body>
    {{-- header --}}
    @include('partials.header')
    {{-- /header --}}

    {{-- main --}}
    <main>
        @yield('content')
    </main>
    {{-- /main --}}

    {{-- footer --}}
    @include('partials.footer')
    {{-- /footer --}}

</body>
</html>