<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        // $posts = \DB::table('post')-> get();
        $posts = Post::latest()->paginate(5);

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        return $request->get('title');
    }

    public function show(Post $post)
    {
        // $posts = Post::findOrFail($id);
        $posts = $post;
        return view('post.show', compact('posts'));
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
