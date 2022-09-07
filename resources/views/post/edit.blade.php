@extends('layout')
@section('title', 'Editar Post')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-8 mx-auto">
            <form action="{{ route('post.update', $posts) }}" method="post" class="bg-white py-3 px-4 shadow rounded">
                <h3>Editar Post</h3>
                <hr>
                @method('PATCH')
                @include('post._form')

                <div>
                    <button class="btn btn-primary btn-sm">Actualizar</button>
                    <a class="btn btn-outline-secondary btn-sm" href="{{ route('post.show', $posts) }}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
