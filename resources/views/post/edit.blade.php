@extends('layout')
@section('title', 'Editar Post')
@section('content')
<h1>Editar Post</h1>

<form action="{{ route('post.update', $posts) }}" method="post">
    @method('PATCH')
    @include('post._form')
    <button>Actualizar</button>
</form>
@endsection
