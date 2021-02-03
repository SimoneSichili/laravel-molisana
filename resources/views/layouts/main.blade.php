<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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