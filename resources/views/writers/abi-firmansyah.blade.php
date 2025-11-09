@extends('layouts.app')
@section('content')

<div class="text-center mb-4">
  <img src="https://cdn-icons-png.flaticon.com/512/921/921083.png" 
       class="rounded-circle mb-3 shadow-sm" width="120" height="120" alt="Abi Firmansyah">
  <h4 class="fw-bold mb-1">Abi Firmansyah</h4>
  <p class="text-muted">Spesialis Network Security</p>
</div>

{{-- Artikel 1 --}}
<div class="article-card">
  <img src="https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=1200"
       class="article-img" alt="Network Security">
  <div>
    <h5 class="fw-bold mb-1">Pentingnya Network Security di Era Digital</h5>
    <p class="text-muted small mb-2">14 May 2024 | by: Abi Firmansyah</p>
    <p class="mb-3">Network Security adalah praktik untuk melindungi data dan sistem dari serangan cyber, memastikan jaringan tetap aman dan stabil...</p>
    <a href="#" class="btn-read">read more...</a>
  </div>
</div>

{{-- Artikel 2 --}}
<div class="article-card">
  <img src="https://images.pexels.com/photos/5473951/pexels-photo-5473951.jpeg?auto=compress&cs=tinysrgb&w=1200"
       class="article-img" alt="Software Design Patterns">
  <div>
    <h5 class="fw-bold mb-1">Software Design Patterns untuk Developer</h5>
    <p class="text-muted small mb-2">14 May 2024 | by: Abi Firmansyah</p>
    <p class="mb-3">Software Design Patterns membantu pengembang menciptakan struktur kode yang rapi dan mudah dikelola dalam pengembangan perangkat lunak...</p>
    <a href="{{ route('posts.software-design-patterns') }}" class="btn-read">read more...</a>
  </div>
</div>

@endsection
