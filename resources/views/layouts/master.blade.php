<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- favicons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ mix('assets/images/placeholder.svg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ mix('assets/images/placeholder.svg') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ mix('assets/images/placeholder.svg') }}">
    <link rel="mask-icon" href="{{ mix('assets/images/placeholder.svg') }}">
    @include('utils.head')
    {{-- favicons --}}
    <title>{{ __('layout.naviation.menu.name') }}</title>
    @yield('style')

    @php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    @endphp

</head>
<body class="relative bg-slate-50">
@include('layouts.header')
    <div class="w-[100rem] flex-shrink-0 mx-auto">
        <main class="flex relative w-full">
            <div class="flex-shrink-0 drop-shadow-sm bg-white top-14 h-[calc(100vh_-_3.5rem)] hidden md:block w-80 sticky overflow-y-auto">
                @include('layouts.sidebar')
            </div>

            <div class="bg-slate-50 w-full p-5">
                @yield('content')
            </div>

            @yield('directTo')
        </main>
    </div>



    @include('utils.script')
    @yield('script')
</body>
</html>