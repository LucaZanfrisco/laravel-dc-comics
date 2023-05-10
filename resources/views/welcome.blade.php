<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/js/app.js')
</head>

<body class="container text-center">
    <div class="fs-3 mt-3">Fumetti DC</div>
    <button class="btn btn-primary"><a href="{{ route('comics.index') }}" class="text-decoration-none text-light">Lista Fumetti</a></button>
</body>

</html>
