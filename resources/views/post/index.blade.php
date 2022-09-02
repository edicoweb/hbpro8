@extends('layout')
@section('title', 'Blog')

@section('content')
    <h1>Posts</h1>
    <a href="{{ route('post.create') }}">Crear Nuevo Post</a>
    <br><br>
    @forelse ($posts as $postItem)
        <li>
            <a href="{{ route('post.show', $postItem) }}">{{ $postItem->title }}</a>

            <form action="{{ route('post.destroy', $postItem) }}" method="post">
                @csrf
                @method('DELETE')
                <button>Eliminar</button>
            </form>

        </li>
    @empty
        <li>No hay proyectos que mostrar</li>
    @endforelse

    {{ $posts->links() }}
@endsection
