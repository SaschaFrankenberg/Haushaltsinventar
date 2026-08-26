<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Haushaltsinventar')</title>
</head>

<body>
    <header>
        <h1>Haushaltsinventar</h1>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('items') }}">Items</a>
            <a href="{{ route('about') }}">About</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Haushaltsinventar</p>
    </footer>
</body>

</html>