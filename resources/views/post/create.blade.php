@extends('layout')

@section('title', 'Crear Nuevo Post')
@section('content')
    <h1>Crear Nuevo Post</h1>

    <form action="{{ route('post.store') }}" method="post">

        @csrf
        <label for="title">Título</label><br>
        <input type="text" name="title" placeholder="Esto es mi título"><br>

        <label for="slug">Url</label><br>
        <input type="text" name="slug" placeholder="esto-es-mi-url"><br>

        <label for="content">Contenido</label><br>
        <textarea name="" name="content" cols="30" rows="10" placeholder="Contenido..."></textarea><br>

        <button>Guardar</button>

    </form>

@endsection
