@extends('layout')
@section('title', 'Nosotros')

@section('content')
    <div class="container mt-5">
        <div class="row">
             <div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" src="/assets/img/about.svg" alt="Inteligencia de negocio">
            </div>
            <div class="col-12 col-lg-6 px-4 mt-1 ">
                <h1 class="text-primary">edicoweb</h1>
                <p class="lead text-secondary">Es una empresa peruana que desarrolla soluciones innovadoras en tecnologías de la información ejecutando proyectos de software y web para empresas y emprededores.</p>
                <a class="btn btn-md btn-block btn-primary d-flex justify-content-center mb-3" href="{{ route('contact.index') }}">Contáctame</a>
                <a class="btn btn-md btn-outline-secondary d-flex justify-content-center mb-3" href="{{ route('post.index') }}">Portafolio</a>
            </div>
        </div>
    </div>
@endsection
