@extends('layout')
@section('title', 'Blog')

@section('content')
    <h1>Posts</h1>

    @auth()
        <a href="{{ route('post.create') }}">Crear Nuevo Post</a>
    @endauth

    @forelse ($posts as $postItem)
        <li>
            <a href="{{ route('post.show', $postItem) }}">{{ $postItem->title }}</a>
        </li>
    @empty
        <li>No hay proyectos que mostrar</li>
    @endforelse

    {{ $posts->links() }}
@endsection
