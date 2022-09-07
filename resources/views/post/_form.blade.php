@csrf

<div class="form-group pb-2">
    <label for="title">Título</label>
    <input type="text" name="title" placeholder="Esto es mi título" value="{{ old('title', $posts->title) }}" class="form-control bg-light shadow-sm @error('title') is-invalid @else border-0 @enderror">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group pb-2">
    <label for="slug">Url</label>
    <input type="text" name="slug" placeholder="esto-es-mi-url" value="{{ old('slug', $posts->slug) }}" class="form-control bg-light shadow-sm @error('slug') is-invalid @else border-0 @enderror">
    @error('slug')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group pb-3">
    <label for="content">Contenido</label>
    <textarea name="content" id="" cols="30" rows="4" placeholder="Content..." class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror">{{old('content', $posts->content)}}</textarea>
    @error('content')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
