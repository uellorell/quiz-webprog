@extends('layouts.app')
@section('content')

<h4 class="fw-bold mb-4 mt-3">{{ $category->name }}</h4>

{{-- Kategori: Interactive Multimedia --}}
@if ($category->name == 'Interactive Multimedia')

  {{-- Human and Computer Interaction --}}
  <div class="article-card">
    <img src="https://images.pexels.com/photos/1181358/pexels-photo-1181358.jpeg" 
         alt="Human and Computer Interaction" class="article-img">
    <div>
      <h5 class="fw-bold mb-1">Human and Computer Interaction</h5>
      <p class="text-muted small mb-2">14 May 2024 | by: Aurellia</p>
      <p class="mb-3">Human and Computer Interaction (HCI) merupakan studi tentang bagaimana manusia berinteraksi dengan komputer dan teknologi secara efektif dan efisien...</p>
      <a href="{{ route('posts.human-computer-interaction') }}" class="btn-read">read more...</a>
    </div>
  </div>

  {{-- User Experience --}}
  <div class="article-card">
    <img src="https://images.pexels.com/photos/3184643/pexels-photo-3184643.jpeg?auto=compress&cs=tinysrgb&w=1200" 
         alt="User Experience" class="article-img">
    <div>
      <h5 class="fw-bold mb-1">User Experience</h5>
      <p class="text-muted small mb-2">14 May 2024 | by: Aurellia</p>
      <p class="mb-3">User Experience (UX) adalah pengalaman pengguna ketika berinteraksi dengan sistem, aplikasi, atau website yang berfokus pada kenyamanan dan kepuasan pengguna...</p>
      <a href="{{ route('posts.user-experience') }}" class="btn-read">read more...</a>
    </div>
  </div>

  {{-- UX for Digital Immersive Technology --}}
  <div class="article-card">
    <img src="https://images.pexels.com/photos/4148608/pexels-photo-4148608.jpeg" 
         alt="UX for Digital Immersive Technology" class="article-img">
    <div>
      <h5 class="fw-bold mb-1">UX for Digital Immersive Technology</h5>
      <p class="text-muted small mb-2">14 May 2024 | by: Aurellia</p>
      <p class="mb-3">UX for Digital Immersive Technology berfokus pada pengalaman pengguna dalam dunia virtual reality, augmented reality, dan mixed reality untuk menciptakan interaksi yang natural...</p>
      <a href="{{ route('posts.ux-digital-immersive-technology') }}" class="btn-read">read more...</a>
    </div>

  </div>

{{-- Kategori: Software Engineering --}}
@elseif ($category->name == 'Software Engineering')

  {{-- Software Design Patterns --}}
  <div class="article-card">
    <img src="https://images.pexels.com/photos/1181359/pexels-photo-1181359.jpeg?auto=compress&cs=tinysrgb&w=600" 
         alt="Software Design Patterns" class="article-img">
    <div>
      <h5 class="fw-bold mb-1">Software Design Patterns</h5>
      <p class="text-muted small mb-2">14 May 2024 | by: Aurellia</p>
      <p class="mb-3">Software Design Patterns adalah solusi yang sudah terbukti untuk permasalahan umum dalam desain perangkat lunak seperti Singleton, Factory, dan Observer Pattern...</p>
      <a href="{{ route('posts.software-design-patterns') }}" class="btn-read">read more...</a>
    </div>

  </div>

  {{-- Agile Software Development --}}
  <div class="article-card">
    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=60" 
         alt="Agile Software Development" class="article-img">
    <div>
      <h5 class="fw-bold mb-1">Agile Software Development</h5>
      <p class="text-muted small mb-2">14 May 2024 | by: Aurellia</p>
      <p class="mb-3">Agile Software Development adalah pendekatan pengembangan perangkat lunak yang berfokus pada kolaborasi tim, fleksibilitas, dan peningkatan berkelanjutan untuk hasil terbaik bagi pengguna...</p>
      <a href="{{ route('posts.agile-software-development') }}" class="btn-read">read more...</a>
    </div>
  </div>

  {{-- Code Reengineering --}}
  <div class="article-card">
    <img src="https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=600" 
         alt="Code Reengineering" class="article-img">
    <div>
      <h5 class="fw-bold mb-1">Code Reengineering</h5>
      <p class="text-muted small mb-2">14 May 2024 | by: Aurellia</p>
      <p class="mb-3">Code Reengineering adalah proses memperbarui dan meningkatkan kualitas kode lama agar lebih efisien, mudah dipelihara, dan sesuai dengan standar baru tanpa mengubah fungsionalitas utama...</p>
      <a href="{{ route('posts.code-reengineering') }}" class="btn-read">read more...</a>
    </div>
  </div>

@endif

@endsection
