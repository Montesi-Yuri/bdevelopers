<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
        <title>{{ config('app.name', 'BDevelopers') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/import.js'])
    </head>

    <body>
        <div class="flex flex-col h-screen">
            <div class="min-h-[10%]">
                @include('partials.header')
            </div>

            <div class="flex min-h-[90%]">
    
                @include('partials.aside')
    
                @yield('main-content')

            </div>
        </div>
        <script src="node_modules\flowbite\dist\flowbite.min.js"></script>
    </body>
</html>
