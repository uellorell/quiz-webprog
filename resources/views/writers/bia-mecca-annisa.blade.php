@extends('layouts.app')
@section('content')

<div class="text-center mb-4">
  <img src="https://cdn-icons-png.flaticon.com/512/921/921079.png" 
       class="rounded-circle mb-3 shadow-sm" width="120" height="120" alt="Bia Mecca Annisa">
  <h4 class="fw-bold mb-1">Bia Mecca Annisa</h4>
  <p class="text-muted">Spesialis Data Science</p>
</div>

{{-- Artikel 1 --}}
<div class="article-card">
  <img src="https://images.pexels.com/photos/1181359/pexels-photo-1181359.jpeg?auto=compress&cs=tinysrgb&w=1200"
       class="article-img" alt="Machine Learning">
  <div>
    <h5 class="fw-bold mb-1">Machine Learning</h5>
    <p class="text-muted small mb-2">14 May 2024 | by: Bia Mecca Annisa</p>
    <p class="mb-3">Machine Learning adalah cabang dari kecerdasan buatan yang memungkinkan komputer belajar dari data tanpa diprogram secara eksplisit...</p>
    <a href="{{ route('posts.machine-learning') }}" class="btn-read">read more...</a>
  </div>
</div>

{{-- Artikel 2 --}}
<div class="article-card">
  <img src="https://images.unsplash.com/photo-1616469829934-5d8e3b10a3a8?auto=format&fit=crop&w=600&q=60"
       class="article-img" alt="Deep Learning">
  <div>
    <h5 class="fw-bold mb-1">Deep Learning dalam Kehidupan</h5>
    <p class="text-muted small mb-2">14 May 2024 | by: Bia Mecca Annisa</p>
    <p class="mb-3">Deep Learning adalah subbidang dari Machine Learning yang menggunakan jaringan saraf tiruan untuk menganalisis data besar dan kompleks...</p>
    <a href="#" class="btn-read">read more...</a>
  </div>
</div>

@endsection