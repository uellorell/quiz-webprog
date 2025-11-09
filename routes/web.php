<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\PageController;

// home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// category & detail category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{slug}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{slug}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');

// detail post
Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');

// daftar & detail writer
Route::get('/writers', [WriterController::class, 'index'])->name('writers.index');
Route::get('/writers/{slug}', [WriterController::class, 'show'])->name('writers.show');

// about us & popular
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/popular', [PageController::class, 'popular'])->name('popular');

Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');

// Interactive Multimedia
Route::view('/posts/human-computer-interaction', 'posts.human-computer-interaction')->name('posts.human-computer-interaction');
Route::view('/posts/user-experience', 'posts.user-experience')->name('posts.user-experience');
Route::view('/posts/ux-digital-immersive-technology', 'posts.ux-digital-immersive-technology')->name('posts.ux-digital-immersive-technology');

// Software Engineering
Route::view('/posts/software-design-patterns', 'posts.software-design-patterns')->name('posts.software-design-patterns');
Route::view('/posts/agile-software-development', 'posts.agile-software-development')->name('posts.agile-software-development');
Route::view('/posts/code-reengineering', 'posts.code-reengineering')->name('posts.code-reengineering');

Route::get('/writers', [WriterController::class, 'index'])->name('writers.index');
Route::get('/writers/{slug}', [WriterController::class, 'show'])->name('writers.show');

Route::view('/writers/raka-putra-wicaksono', 'writers.raka-putra-wicaksono')->name('writers.raka-putra-wicaksono');
Route::view('/writers/bia-mecca-annisa', 'writers.bia-mecca-annisa')->name('writers.bia-mecca-annisa');
Route::view('/writers/abi-firmansyah', 'writers.abi-firmansyah')->name('writers.abi-firmansyah');

Route::view('/about', 'about')->name('about');

Route::get('/popular', function () {
    $allPosts = [
        [
            'title' => 'Machine Learning',
            'date' => '14 May 2024',
            'author' => 'Bia',
            'excerpt' => 'Di tengah pesatnya perkembangan teknologi kecerdasan buatan atau artificial intelligence (AI)...',
            'image' => 'https://images.pexels.com/photos/7713133/pexels-photo-7713133.jpeg?auto=compress&cs=tinysrgb&w=1200',
        ],
        [
            'title' => 'Deep Learning',
            'date' => '14 May 2024',
            'author' => 'Lia',
            'excerpt' => 'Deep learning merupakan subbidang machine learning yang algoritmanya terinspirasi dari struktur otak...',
            'image' => 'https://images.pexels.com/photos/1181359/pexels-photo-1181359.jpeg?auto=compress&cs=tinysrgb&w=1200',
        ],
        [
            'title' => 'Natural Language Processing',
            'date' => '15 May 2024',
            'author' => 'Husna',
            'excerpt' => 'Natural Language Processing (NLP) merupakan salah satu cabang ilmu AI yang berfokus pada pengolahan...',
            'image' => 'https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=1200',
        ],
        [
            'title' => 'Software Design Patterns',
            'date' => '16 May 2024',
            'author' => 'Abi',
            'excerpt' => 'Software Design Patterns adalah solusi umum dalam desain perangkat lunak seperti Singleton dan Factory...',
            'image' => 'https://images.pexels.com/photos/3184643/pexels-photo-3184643.jpeg?auto=compress&cs=tinysrgb&w=1200',
        ],
        [
            'title' => 'Agile Software Development',
            'date' => '17 May 2024',
            'author' => 'Aurellia',
            'excerpt' => 'Agile Development menekankan fleksibilitas, kerja tim, dan peningkatan berkelanjutan dalam pembuatan perangkat lunak...',
            'image' => 'https://images.pexels.com/photos/1181358/pexels-photo-1181358.jpeg?auto=compress&cs=tinysrgb&w=1200',
        ],
        [
            'title' => 'Code Reengineering',
            'date' => '18 May 2024',
            'author' => 'Raka',
            'excerpt' => 'Code Reengineering membantu memperbaiki struktur kode lama tanpa mengubah fungsi utamanya...',
            'image' => 'https://images.pexels.com/photos/4148608/pexels-photo-4148608.jpeg?auto=compress&cs=tinysrgb&w=1200',
        ],
    ];

    $perPage = 3;
    $page = request('page', 1);
    $chunks = array_chunk($allPosts, $perPage);
    $populars = $chunks[$page - 1] ?? [];
    $totalPages = count($chunks);

    return view('popular', compact('populars', 'page', 'totalPages'))
        ->with('currentPage', $page);
})->name('popular');
