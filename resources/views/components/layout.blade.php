<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <x-navbar />

    {{ $slot }}

    {{-- My JS --}}
    <script src="js/app.js"></script>
</body>
</html>