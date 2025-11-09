<?php

namespace App\Http\Controllers;

use App\Models\Writer;

class WriterController extends Controller
{
    public function index()
    {
        $writers = Writer::withCount('posts')->get();
        return view('writers.index', compact('writers'));

        $writers = Writer::withCount('posts')->get();
        return view('writers.index', compact('writers'));
    }

    public function show(string $slug)
    {
        $writer = Writer::where('slug', $slug)->firstOrFail();
        $posts = $writer->posts()->with('category')->latest('published_at')->paginate(6);
        return view('writers.show', compact('writer','posts'));

        $writer = Writer::with('posts')->where('slug', $slug)->firstOrFail();
        return view('writers.show', compact('writer'));

        $writer = Writer::with('posts.category')->where('slug', $slug)->firstOrFail();
        return view('writers.show', compact('writer'));
    }
}
