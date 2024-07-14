<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Posts Crud</title>

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-950 min-h-screen text-white grid">
    <livewire:navbar />
    <section class="grid place-items-center">
        <livewire:posts-table />
    </section>
</body>

</html>
