<nav class="navbar bg-white shadow-sm">
    <a class="navbar-brand" href="{{ route('home') }}">{{config('app.name')}}</a>
    <ul class="nav nav-pills">
        <li class="nav-item"><a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">Inicio</a></li>
        <li class="nav-item"><a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">Nosotros</a></li>
        <li class="nav-item"><a class="nav-link {{ setActive('post*') }}" href="{{ route('post.index') }}">Blog</a></li>
        <li class="nav-item"><a class="nav-link {{ setActive('contact*') }}" href=" {{ route('contact.index') }}">Contacto</a></li>
        @guest()
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Iniciar sesion</a></li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Cerrar Sesion
                </a>
            </li>
        @endguest
    </ul>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
