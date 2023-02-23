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
    
    <title>{{ __('layout.naviation.menu.name') }}</title>
    @yield('style')
</head>
<body class="relative bg-white">
    @include('layouts.header')
    <div class="max-w-[90rem] w-full flex-shrink-0 mx-auto">
        <main class="flex relative w-full">

            <div class="w-full sm:p-5">
                @yield('content')
            </div>

            <div class="flex-shrink-0 top-14 h-[calc(100vh_-_5rem)] hidden md:block w-[27.5rem] sticky overflow-y-auto">
                @include('template.list')
            </div>
            
        </main>
    </div>
    @yield('script')
</body>
</html>