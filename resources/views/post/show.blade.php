@extends('layout')
@section('title', 'Post | '.$posts->title)
@section('content')
    <div class="container">
        <div class="bg-white p-5 shadow rounded">
            <h3>{{ $posts->title }}</h3>
            <p class="text-secondary">{{ $posts->content }}</p>
            <p class="text-black-50">{{ $posts->updated_at->diffForHumans() }}</p>

                @auth()
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('post.index') }}">Regresar</a>
                        <div class="btn-group">
                            <a class="btn btn-primary btn-sm" href="{{route('post.edit', $posts)}}">Editar</a>
                            <a class="btn btn-outline-secondary btn-sm" href="#" onclick="document.getElementById('delete-proyect').submit()">Eliminar</a>
                        </div>
                    </div>

                    <form id="delete-proyect" action="{{ route('post.destroy', $posts) }}" method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                @endauth
        </div>
    </div>
@endsection
