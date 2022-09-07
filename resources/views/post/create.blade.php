@extends('layout')

@section('title', 'Crear Nuevo Post')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-8 mx-auto">
            <form action="{{ route('post.store') }}" method="post" class="bg-white py-3 px-4 shadow-sm rounded">
                <h3 class="mb-0 pb-0">Crear Nuevo Post</h3>
                <hr>
                @include('post._form')
                <div>
                    <button class="btn btn-primary btn-sm">Guardar</button>
                    <a class="btn btn-outline-secondary btn-sm" href="{{ route('post.index') }}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
