@extends('layout')
@section('title', 'Blog')

@section('content')
    <h1>Posts</h1>
    @forelse ($portafolio as $portafolioItem)
        <li>{{ $portafolioItem['title'] }}</li>
    @empty
        <li>No hay proyectos que mostrar</li>
    @endforelse
@endsection
