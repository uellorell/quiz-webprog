@extends('layouts.app')
@section('content')
<div class="d-flex align-items-center gap-3 mb-3">
  <img src="{{ $writer->avatar_url }}" class="rounded-circle" width="72" height="72" alt="">
  <div>
    <h4 class="mb-1">{{ $writer->name }}</h4>
    <p class="text-muted small mb-0">{{ $writer->bio }}</p>
  </div>
</div>

<div class="row g-3">
@foreach($posts as $post)
  <div class="col-md-6">
    <div class="border rounded-3 p-3 h-100">
      <h5 class="mb-1">{{ $post->title }}</h5>
      <p class="text-muted small mb-1">
        {{ $post->published_at?->format('d M Y') }} • {{ $post->category->name }}
      </p>
      <p class="mb-2">{{ $post->excerpt }}</p>
      <a href="{{ route('posts.show',$post->slug) }}" class="btn btn-outline-primary btn-sm">Read more…</a>
    </div>
  </div>
@endforeach
</div>

<div class="mt-3">
  {{ $posts->links() }}
</div>
@endsection
