<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel + Bootstrap</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">MyLaravelApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-light py-5 text-center">
        <div class="container">
            <h1 class="display-5 fw-bold">Welcome to Laravel + Bootstrap</h1>
            <p class="lead">You have successfully set up Laravel 12 with Bootstrap 5 🎉</p>
            <a href="#" class="btn btn-primary btn-lg">Get Started</a>
        </div>
    </div>

    <!-- Content Section -->
    <div class="container my-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Card 1</h5>
                        <p class="card-text">This is an example card built with Bootstrap.</p>
                        <a href="#" class="btn btn-outline-primary">See more</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <p class="card-text">You can duplicate these cards for your own content.</p>
                        <a href="#" class="btn btn-outline-success">Learn more</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Card 3</h5>
                        <p class="card-text">Bootstrap components are easy to customize and responsive.</p>
                        <a href="#" class="btn btn-outline-danger">Try it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <small>© 2025 MyLaravelApp. All rights reserved.</small>
    </footer>
</body>
</html>
