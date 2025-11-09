<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index', ['categories' => Category::all()]);
    }

    public function show(string $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->with('writer')->latest('published_at')->paginate(6);
        return view('categories.show', compact('category','posts'));
    }
}
