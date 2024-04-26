<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel Site</title>
</head>
<body>
    <header>
        <h1>Welcome to My Site</h1>
    </header>

    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/another') }}">Another</a>
        <a href="{{ url('/form') }}">Form</a>
    </nav>

    @yield('content')

    @include('layouts.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
