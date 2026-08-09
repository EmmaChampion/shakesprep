@props([
    'title' => 'Shakesprep'
])

<!DOCTYPE html>
<html lang="en" data-theme="shakesprep">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('resources/layout.css')}}">
    <link rel="stylesheet" href="{{asset('resources/footer.css')}}">
    <title>{{ $title }}</title>
</head>
<body class="bg-base-100">
    <x-header></x-header>
    <main>
        {{ $slot }}
    </main>
    <x-footer></x-footer>
</body>
</html>