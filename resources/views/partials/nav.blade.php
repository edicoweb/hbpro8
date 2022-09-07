<nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm fixed-top">

    <div class="container">
            <div class="d-flex justify-content-between">
                <a class="navbar-brand" href="{{ route('home') }}">{{config('app.name')}}</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="nav nav-tabs d-flex flex-sm-column flex-md-row flex-lg-row">
                    <li class="nav-item"><a class="nav-link d-flex justify-content-center {{ setActive('home') }}" href="{{ route('home') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link d-flex justify-content-center {{ setActive('about') }}" href="{{ route('about') }}">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link d-flex justify-content-center {{ setActive('post*') }}" href="{{ route('post.index') }}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link d-flex justify-content-center {{ setActive('contact*') }}" href=" {{ route('contact.index') }}">Contacto</a></li>
                    @guest()
                        <li class="nav-item"><a class="nav-link d-flex justify-content-center {{ setActive('login*') }}" href="{{ route('login') }}">Iniciar sesion</a></li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link d-flex justify-content-center" href="#" onclick="event.preventDefault();
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
