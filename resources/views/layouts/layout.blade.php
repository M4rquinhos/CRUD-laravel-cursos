<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> --}}
    <title>@yield('title')</title>
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    {{-- header --}}
    {{-- nav --}}

    @include('layouts.partials.header')

    {{-- content --}}

    @yield('content')


    {{-- footer --}}
    @include('layouts.partials.footer')

    {{-- script --}}
</body>
</html>
