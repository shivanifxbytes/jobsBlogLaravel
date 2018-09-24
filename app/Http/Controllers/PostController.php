<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
{
    $posts = Post::all();

    return view('post.index', compact('posts'));
}

    public function create()
    {
        return view('post.post');
    }

    public function store(Request $request)
    {
        $post =  new Post;
        $post->title = $request->get('title');
        $post->body = $request->get('body');

        $post->save();

        return redirect('posts');

    }

    public function show($id)
{
    $post = Post::find($id);

    return view('post.show', compact('post'));
}

}
