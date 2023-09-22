<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ url('./images/favicon.ico') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
{{ $slot }}

@filamentScripts
@vite('resources/js/app.js')
</body>
</html>
