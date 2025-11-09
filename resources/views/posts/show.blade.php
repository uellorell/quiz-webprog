@extends('layouts.app')
@section('content')

<h4 class="fw-bold mb-3">{{ $post->category->name }}</h4>

{{-- Banner Gambar --}}
<div class="mb-3">
  <img src="{{ $post->image_url ?? 'https://images.pexels.com/photos/1181359/pexels-photo-1181359.jpeg?auto=compress&cs=tinysrgb&w=1200' }}" 
       class="img-fluid rounded-4 shadow-sm" 
       alt="{{ $post->title }}">
</div>

{{-- Judul & Info --}}
<h5 class="fw-bold mb-1">{{ $post->title }}</h5>
<p class="text-muted small mb-3">{{ $post->published_at?->format('d M Y') }} | by: {{ $post->writer->name }}</p>

{{-- Isi Artikel --}}
<p style="text-align: justify;">
  {!! nl2br(e($post->body)) !!}
</p>

@endsection
