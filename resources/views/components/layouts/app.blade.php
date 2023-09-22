<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ url('./images/favicon.ico') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @livewireStyles
</head>
<body>
    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    @livewireScripts
</body>
</html>
