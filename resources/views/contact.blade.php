@extends('layout')
@section('title', 'Contacto')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-5 mx-auto">
                <form action="{{route('contact.store')}}" method="post" class="bg-white shadow rounded py-3 px-4">
                    @csrf
                    <h1 class="display-7">Contáctanos</h1>
                    <div class="form-group pb-2">
                        <label for="name">Nombre:</label>
                        <input type="text" name="name" placeholder="Edil..." value="{{old('name')}}" class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror">
                        <!-- {!! $errors->first('name', '<small>:message</small><br>') !!} -->
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group pb-2">
                        <label for="email">Correo Electrónico:</label>
                        <input type="text" name="email" placeholder="usuario@example.com" value="{{old('email')}}" class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group pb-2">
                        <label for="subject">Asunto:</label>
                        <input type="text" name="subject" placeholder="Asunto" value="{{old('subject')}}" class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror">
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group pb-2">
                        <label for="content">Contenido: </label>
                        <textarea name="content" id="" cols="" rows="2" placeholder="Mensaje..." class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror">{{ old('content') }}</textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button class="btn btn-primary w-100">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
