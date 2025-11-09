@extends('layouts.app')
@section('content')
<h3 class="mb-3">Categories</h3>
<div class="row g-3">
@foreach($categories as $cat)
  <div class="col-md-6">
    <a class="text-decoration-none" href="{{ route('categories.show',$cat->slug) }}">
      <div class="p-4 border rounded-3 h-100 text-center">
        <h5 class="mb-0">{{ $cat->name }}</h5>
      </div>
    </a>
  </div>
@endforeach
</div>
@endsection
