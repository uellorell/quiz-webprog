<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show(string $slug)
    {
        $post = Post::with(['category','writer'])->where('slug',$slug)->firstOrFail();
        return view('posts.show', compact('post'));
    }
}
