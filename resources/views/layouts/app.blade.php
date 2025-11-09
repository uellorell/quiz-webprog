<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EduFun</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f7f8fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .dropdown-menu .dropdown-item:hover,
    .dropdown-menu .dropdown-item:focus {
      text-decoration: underline;
      text-underline-offset: 5px;
      text-decoration-thickness: 1.5px;
      background-color: transparent;
    }

    .navbar-brand {
      font-weight: 700;
      color: #000 !important;
      letter-spacing: 0.5px;
    }
    .nav-link {
      font-weight: 600;
      color: #000 !important;
      margin-right: 10px;
    }
    .nav-link.active {
      color: #0d6efd !important;
    }
    footer {
      background-color: #0b1831;
      color: #fff;
      font-size: 14px;
      padding: 20px 0;
      text-align: center;
    }
    .article-card {
      background-color: #f2f2f2;
      border-radius: 15px;
      padding: 20px;
      display: flex;
      align-items: center;
      gap: 20px;
      margin-bottom: 20px;
    }
    .article-img {
      width: 250px;
      border-radius: 10px;
    }
    .btn-read {
      background-color: #0b1831;
      color: #fff;
      border-radius: 25px;
      font-size: 14px;
      font-weight: 500;
      padding: 6px 18px;
      text-decoration: none;
    }
    .btn-read:hover {
      background-color: #0a1226;
      color: #fff;
    }

  </style>
</head>
<body>

  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">
        <span style="font-family: serif; font-size: 22px;">EF</span> EduFun
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>

          {{-- Dropdown Category --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
            <ul class="dropdown-menu">
              @foreach(\App\Models\Category::all() as $cat)
                <li><a class="dropdown-item" href="{{ route('categories.show',$cat->slug) }}">{{ $cat->name }}</a></li>
              @endforeach
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="{{ route('writers.index') }}">Writers</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('popular') }}">Popular</a></li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('popular') ? 'active' : '' }}" href="{{ route('popular') }}">Popular</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container my-4">
    @yield('content')
  </main>

  <footer>
    © EduFun 2024 | Web Programming | Aurellia Davina Rifasya Putri | 2702315974
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
