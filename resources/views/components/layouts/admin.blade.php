@props([
    'title' => 'Backoffice | Beauty Booking',
])

<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light">

    @auth
        <header class="bg-white border-bottom">
            <div class="container py-3 d-flex justify-content-between align-items-center">

                <a href="{{ route('admin.dashboard') }}" class="text-decoration-none text-dark fw-bold">
                    Beauty Booking | Admin
                </a>

                <div class="d-flex align-items-center gap-3">

                    <span class="text-muted">
                        Olá, {{ auth()->user()->name }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="btn btn-outline-dark btn-sm">
                            Terminar sessão
                        </button>
                    </form>

                </div>
            </div>
        </header>
    @endauth

    <main>
        {{ $slot }}
    </main>

</body>

</html>
