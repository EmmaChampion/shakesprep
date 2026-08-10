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
    <script src="https://cdn.jsdelivr.net/npm/@hot-page/hotfx-shy-header@0.0.0" type="text/javascript" defer></script>
    <title>{{ $title }}</title>
</head>
<body class="bg-base-100">
    <hotfx-shy-header>
        <x-header></x-header>
    </hotfx-shy-header>
    <main class="mt-8 mb-8 mx-16">
        {{ $slot }}
    </main>
    <x-footer></x-footer>
</body>
</html>