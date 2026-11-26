<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Beauty Booking' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <x-header />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

</body>

</html>
