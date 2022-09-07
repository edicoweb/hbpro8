<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">{{config('app.name')}}</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link {{ setActive('post*') }}" href="{{ route('post.index') }}">Blog</a></li>
                <li class="nav-item"><a class="nav-link {{ setActive('contact*') }}" href=" {{ route('contact.index') }}">Contacto</a></li>
                @guest()
                    <li class="nav-item"><a class="nav-link {{ setActive('login*') }}" href="{{ route('login') }}">Iniciar sesion</a></li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Cerrar Sesion
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>

</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
