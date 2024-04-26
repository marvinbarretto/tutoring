<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>
</head>
<body>
    <h1>Hello World!</h1>
    <a href="{{ url('/another') }}">Go to second page</a>
    <a href="{{ url('/form') }}">Go to form page</a>
    @include('partials.common')
</body>
</html>
