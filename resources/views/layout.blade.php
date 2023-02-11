<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('home.index') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('home.about') }}">About</a>
                </li>
                <li>
                    <a href="{{ route('home.contact') }}">Contact</a>
                </li>
                <li>
                    <a href="{{ route('computers.index') }}">Computers</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>