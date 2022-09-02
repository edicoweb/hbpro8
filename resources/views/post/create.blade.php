@extends('layout')

@section('title', 'Crear Nuevo Post')
@section('content')
    <h1>Crear Nuevo Post</h1>

    <form action="{{ route('post.store') }}" method="post">
        @include('post._form')
        <button>Guardar</button>
    </form>

@endsection
