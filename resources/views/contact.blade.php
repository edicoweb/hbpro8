@extends('layout')
@section('title', 'Contacto')

@section('content')
    <h2>Contáctanos</h2>

    <form action="{{route('contact.store')}}" method="post">
        @csrf
        <label for="name">Nombre</label><br>
        <input type="text" name="name" placeholder="Mi Nombre" value="{{old('name')}}"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <label for="email">Correo Electrónico</label><br>
        <input type="text" name="email" placeholder="hackbots@example.com" value="{{old('email')}}"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <label for="subject">Asunto</label><br>
        <input type="text" name="subject" placeholder="Asunto" value="{{old('subject')}}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}

        <label for="content">Contenido</label><br>
        <textarea name="content" id="" cols="20" rows="5" placeholder="Mensaje...">{{ old('content') }}</textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}

        <button>Enviar</button>
    </form>
@endsection
