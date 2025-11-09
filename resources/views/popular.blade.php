@extends('layouts.app')

@section('content')

<h3 class="fw-bold mt-4 mb-4">Popular</h3>

@foreach($populars as $post)
<div class="article-card">
  <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="article-img">
  <div>
    <h5 class="fw-bold mb-1">{{ $post['title'] }}</h5>
    <p class="text-muted small mb-2">{{ $post['date'] }} | by: {{ $post['author'] }}</p>
    <p class="mb-3">{{ $post['excerpt'] }}</p>
    <a href="#" class="btn-read">read more...</a>
  </div>
</div>
@endforeach

{{-- Pagination --}}
<div class="text-center mt-4">
  <span>Page</span>
  @for ($i = 1; $i <= $totalPages; $i++)
    @if ($i == $currentPage)
      <span class="fw-bold text-dark"> {{ $i }} </span>
    @else
      <a href="{{ route('popular', ['page' => $i]) }}" class="text-decoration-none text-primary"> {{ $i }} </a>
    @endif
  @endfor
</div>

@endsection
