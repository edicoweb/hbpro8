@extends('layout')
@section('title', 'Post | '.$posts->title)
@section('content')
    <h2>{{ $posts->title }}</h2>
    <p>{{ $posts->content }}</p>
    <small>{{ $posts->updated_at->diffForHumans() }}</small>
@endsection
