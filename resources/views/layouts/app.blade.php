<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Haushaltsinventar')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <nav>
            <a href="{{ route('home.index') }}">Home</a>
            <a href="{{ route('items.index') }}">Items</a>
            <a href="{{ route('home.about') }}">About</a>
        </nav>
        <h1>Haushaltsinventar</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Haushaltsinventar</p>
    </footer>
</body>

</html>