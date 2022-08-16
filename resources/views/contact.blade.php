@extends('layout')
@section('title', 'Contacto')

@section('content')
    <h2>Contáctanos</h2>

    <form action="{{route('contact.store')}}" method="post">
        @csrf
        <label for="name">Nombre</label><br>
        <input type="text" name="name" placeholder="Mi Nombre"><br>

        <label for="email">Correo Electrónico</label><br>
        <input type="email" name="email" placeholder="hackbots@example.com"><br>

        <label for="subject">Asunto</label><br>
        <input type="text" name="subject" placeholder="Asunto"><br>

        <label for="content">Contenido</label><br>
        <textarea name="content" id="" cols="20" rows="10" placeholder="Mensaje..."></textarea><br>

        <button>Enviar</button>
    </form>
@endsection
