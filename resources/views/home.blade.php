@extends('layout')
@section('title', 'Inicio')

@section('content')
    <div class="container h-90 mt-5">
        <div class="row">
             <div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" src="/assets/img/home.svg" alt="Inteligencia de negocio">
            </div>
            <div class="col-12 col-lg-6 px-4 mt-1 mt-lg-5">
                <h1 class="text-primary">por que edicoweb?</h1>
                <p class="lead text-secondary">Nos encargamos de que tu proyecto se haga realidad junto a nuestro equipo profesional en TI</p>
                <a class="btn btn-md btn-block btn-primary d-flex justify-content-center mb-4" href="{{ route('contact.index') }}">Contáctame</a>
                <a class="btn btn-md btn-outline-secondary d-flex justify-content-center mb-4" href="{{ route('post.index') }}">Portafolio</a>
            </div>
        </div>
    </div>
@endsection
