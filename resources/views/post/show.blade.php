@extends('layout')
@section('title', 'Post | '.$posts->title)
@section('content')
    <a href="{{route('post.edit', $posts)}}">Edit</a>
    <h2>{{ $posts->title }}</h2>
    <p>{{ $posts->content }}</p>
    <small>{{ $posts->updated_at->diffForHumans() }}</small>
@endsection
