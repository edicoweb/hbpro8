@extends('layout')
@section('title', 'Blog')

@section('content')
    <h1>Posts</h1>
    @forelse ($posts as $postItem)
        <li>
            <a href="">{{ $postItem->title }}</a>
        </li>
    @empty
        <li>No hay proyectos que mostrar</li>
    @endforelse

    {{ $posts->links() }}
@endsection
