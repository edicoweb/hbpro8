@extends('layout')
@section('title', 'Blog')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Posts</h3>
            @auth()
                <a class="btn btn-primary btn-sm" href="{{ route('post.create') }}">Crear Nuevo Post</a>
            @endauth
        </div>
        <p class="text-secondary">Nuestra lista de proyectos desarrolados por expertos en TI</p>

        <ul class="list-group ">
            @forelse ($posts as $postItem)
                <li class="list-group-item border-0 mb-3 shadow-sm rounded d-flex justify-content-between align-items-center">
                    <a class="text-secondary font-weight-bold text-decoration-none" href="{{ route('post.show', $postItem) }}">{{ $postItem->title }}</a>
                    <small class="text-secondary">{{$postItem->created_at->format('m/Y')}}</small>
                </li>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">No hay proyectos que mostrar</li>
            @endforelse

            {{ $posts->links() }}
        </ul>
    </div>
@endsection
