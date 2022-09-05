<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
</head>
<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('partials.nav')
            @include('partials.sessionStatus')
        </header>
        <main>
            @yield('content')
        </main>
        <footer class="bg-white text-center text-black-50 py-1 shadow">
            {{ config('app.name') }} | copyright @ {{ date('Y') }}
        </footer>
    </div>
</body>
</html>
