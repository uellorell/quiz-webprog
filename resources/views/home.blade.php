@extends('layouts.app')

@section('content')

{{-- Hero Banner --}}
<div class="row mb-5 mt-4"> 
  <div class="col-md-12">
    <img src="https://images.pexels.com/photos/7713133/pexels-photo-7713133.jpeg?auto=compress&cs=tinysrgb&w=1200" 
         class="img-fluid rounded shadow-sm" 
         alt="Students learning together">
  </div>
</div>

{{-- Article List --}}
<div class="article-card">
  {{-- Machine Learning --}}
  <img src="https://picsum.photos/400/250?1" 
       alt="Machine Learning" class="article-img">
  <div>
    <h5 class="fw-bold mb-1">Machine Learning</h5>
    <p class="text-muted small mb-2">14 May 2024 | by: Bia</p>
    <p class="mb-3">Di tengah pesatnya perkembangan teknologi kecerdasan buatan atau artificial intelligence (AI)...</p>
    <a href="#" class="btn-read">read more...</a>
  </div>
</div>

<div class="article-card">
  {{-- Human Computer Interaction --}}
  <img src="https://picsum.photos/400/250?2" 
       alt="Human Computer Interaction" class="article-img">
  <div>
    <h5 class="fw-bold mb-1">Human and Computer Interaction</h5>
    <p class="text-muted small mb-2">14 May 2024 | by: Sabrina</p>
    <p class="mb-3">Human-Computer Interaction atau HCI adalah studi tentang bagaimana manusia berinteraksi dengan...</p>
    <a href="#" class="btn-read">read more...</a>
  </div>
</div>

@endsection
