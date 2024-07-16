<!DOCTYPE html>
<html class="dark" lang="{{ str_replace("_", "-", app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">

        <title>{{ $title ?? env("APP_NAME") }}</title>

        <!-- Styles -->
        @vite("resources/css/app.css")
    </head>

    <body class="grid min-h-screen bg-gray-950 text-white">
        <livewire:navbar />
        {{ $slot }}
    </body>

</html>
