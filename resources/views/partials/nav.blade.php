<style>
    .active a {
    color: red;
}
</style>

<nav>
    <ul>
        <li class="{{ setActive('home') }}"><a href="{{ route('home') }}">Inicio</a></li>
        <li class="{{ setActive('about') }}"><a href="{{ route('about') }}">Nosotros</a></li>
        <li class="{{ setActive('post*') }}"><a href="{{ route('post.index') }}">Blog</a></li>
        <li class="{{ setActive('contact*') }}"><a href=" {{ route('contact.index') }}">Contacto</a></li>
    </ul>
</nav>
