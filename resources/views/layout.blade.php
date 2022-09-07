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
    <div id="app" class="d-flex flex-column mh-100 h-screen justify-content-between">
        <header class="mb-4">
            @include('partials.nav')
            @include('partials.sessionStatus')
        </header>
        <main class=" mt-5 position-realitve">
                @yield('content')
        </main>
        <footer class="bg-white text-center text-black-50 py-1 shadow mt-3">
            {{ config('app.name') }} | copyright @ {{ date('Y') }}
        </footer>
    </div>
</body>
</html>
