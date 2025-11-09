@extends('layouts.app')
@section('content')

<div class="text-center mb-4">
  <img src="https://cdn-icons-png.flaticon.com/512/921/921089.png" 
       class="rounded-circle mb-3 shadow-sm" width="120" height="120" alt="Raka Putra Wicaksono">
  <h4 class="fw-bold mb-1">Raka Putra Wicaksono</h4>
  <p class="text-muted">Spesialis Interactive Multimedia</p>
</div>

{{-- Artikel 1 --}}
<div class="article-card">
  <img src="https://images.pexels.com/photos/1181358/pexels-photo-1181358.jpeg" 
       class="article-img" alt="Human and Computer Interaction">
  <div>
    <h5 class="fw-bold mb-1">Human and Computer Interaction</h5>
    <p class="text-muted small mb-2">14 May 2024 | by: Raka Putra Wicaksono</p>
    <p class="mb-3">Human and Computer Interaction (HCI) mempelajari bagaimana manusia berinteraksi dengan sistem komputer untuk menciptakan pengalaman yang efisien dan nyaman...</p>
    <a href="{{ route('posts.human-computer-interaction') }}" class="btn-read">read more...</a>
  </div>
</div>

{{-- Artikel 2 --}}
<div class="article-card">
  <img src="https://images.pexels.com/photos/3184643/pexels-photo-3184643.jpeg?auto=compress&cs=tinysrgb&w=1200" 
       class="article-img" alt="User Experience">
  <div>
    <h5 class="fw-bold mb-1">User Experience</h5>
    <p class="text-muted small mb-2">14 May 2024 | by: Raka Putra Wicaksono</p>
    <p class="mb-3">User Experience (UX) berfokus pada kenyamanan pengguna dalam menggunakan sistem atau produk digital agar lebih efektif dan memuaskan...</p>
    <a href="{{ route('posts.user-experience') }}" class="btn-read">read more...</a>
  </div>
</div>

@endsection
