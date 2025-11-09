<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function popular()
    {
        $posts = Post::with(['category','writer'])
            ->where('is_popular', true)
            ->latest('published_at')
            ->paginate(3);
        return view('popular', compact('posts'));
    }
}
