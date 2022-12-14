<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostValidationRequest;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        // $posts = \DB::table('post')-> get();
        $posts = Post::latest()->paginate();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create', ['posts' => new Post]);
    }

    public function store(PostValidationRequest $request)
    {
        Post::create($request->validated());
        return redirect()->route('post.index')->with('status', 'El Post fue creado con éxito');
    }

    public function show(Post $post)
    {
        $posts = $post;
        return view('post.show', compact('posts'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', ['posts' => $post]);
    }

    public function update(PostValidationRequest $request, Post $post)
    {
        $post->update($request->validated());

        return redirect()->route('post.show', $post)->with('status', 'El Post fue actualizado con éxito');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('status', 'El Post fue eliminado con exito');
    }
}
