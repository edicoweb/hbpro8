@extends('layout')
@section('title', 'Post | '.$posts->title)
@section('content')

@auth()
    <a href="{{route('post.edit', $posts)}}">Editar</a>

    <form action="{{ route('post.destroy', $posts) }}" method="post">
        @csrf
        @method('DELETE')
        <button>Eliminar</button>
    </form>
@endauth

    <h2>{{ $posts->title }}</h2>
    <p>{{ $posts->content }}</p>
    <small>{{ $posts->updated_at->diffForHumans() }}</small>
@endsection
