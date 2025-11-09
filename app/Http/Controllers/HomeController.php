<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'latest' => Post::with(['category','writer'])
                ->whereNotNull('published_at')
                ->latest('published_at')
                ->take(6)->get(),
            'categories' => Category::all(),
        ]);
    }
}
