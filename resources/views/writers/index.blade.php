@extends('layouts.app')

@section('content')

<h3 class="fw-bold mt-4 mb-4">Our Writers</h3>

<div class="row text-center justify-content-center">
  {{-- Writer 1 --}}
  <a href="{{ route('writers.raka-putra-wicaksono') }}" ...>
  <div class="col-md-3 mx-3">
    <a href="{{ route('writers.show', 'raka-putra-wicaksono') }}" class="text-decoration-none text-dark">
      <div class="card border-0 bg-transparent">
        <img src="https://cdn-icons-png.flaticon.com/512/921/921089.png" 
             class="rounded-circle mx-auto d-block shadow-sm" 
             width="180" height="180" alt="Raka Putra Wicaksono">
        <div class="card-body">
          <h5 class="fw-bold">Raka Putra Wicaksono</h5>
          <p class="text-muted mb-0">Spesialis Interactive Multimedia</p>
        </div>
      </div>
    </a>
  </div>

  {{-- Writer 2 --}}
  <a href="{{ route('writers.bia-mecca-annisa') }}" ...>
  <div class="col-md-3 mx-3">
    <a href="{{ route('writers.show', 'bia-mecca-annisa') }}" class="text-decoration-none text-dark">
      <div class="card border-0 bg-transparent">
        <img src="https://cdn-icons-png.flaticon.com/512/921/921079.png" 
             class="rounded-circle mx-auto d-block shadow-sm" 
             width="180" height="180" alt="Bia Mecca Annisa">
        <div class="card-body">
          <h5 class="fw-bold">Bia Mecca Annisa</h5>
          <p class="text-muted mb-0">Spesialis Data Science</p>
        </div>
      </div>
    </a>
  </div>

  {{-- Writer 3 --}}
  <a href="{{ route('writers.abi-firmansyah') }}" ...>
  <div class="col-md-3 mx-3">
    <a href="{{ route('writers.show', 'abi-firmansyah') }}" class="text-decoration-none text-dark">
      <div class="card border-0 bg-transparent">
        <img src="https://cdn-icons-png.flaticon.com/512/921/921083.png" 
             class="rounded-circle mx-auto d-block shadow-sm" 
             width="180" height="180" alt="Abi Firmansyah">
        <div class="card-body">
          <h5 class="fw-bold">Abi Firmansyah</h5>
          <p class="text-muted mb-0">Spesialis Network Security</p>
        </div>
      </div>
    </a>
  </div>
</div>

@endsection
