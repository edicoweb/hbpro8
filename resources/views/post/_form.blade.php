@csrf

<label for="title">Título</label><br>
<input type="text" name="title" placeholder="Esto es mi título" value="{{ old('title', $posts->title) }}"><br>
{!! $errors->first('title', '<small>:message</small><br>') !!}

<label for="slug">Url</label><br>
<input type="text" name="slug" placeholder="esto-es-mi-url" value="{{ old('slug', $posts->slug) }}"><br>
{!! $errors->first('slug', '<small>:message</small><br>') !!}

<label for="content">Contenido</label><br>
<textarea name="content" id="" cols="30" rows="10" placeholder="Content...">{{old('content', $posts->content)}}</textarea><br>
{!! $errors->first('content', '<small>:message</small><br>') !!}
