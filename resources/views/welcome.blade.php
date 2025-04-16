<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>XKEYSCORE - Data Privacy Education</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Bootstrap 5 Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vite (if used for styles/scripts) -->
    {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    {{-- @else --}}
    <!-- You can add any custom styles if needed -->
    {{-- @endif --}}
</head>
<body class="bg-light text-dark flex flex-column min-vh-100">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">XKEYSCORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log in</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @endif
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container-fluid bg-dark text-white py-5 text-center">
        <h1 class="display-4">Welcome to XKEYSCORE</h1>
        <p class="lead">An educational tool to raise awareness about data privacy risks and how easily personal data can be exploited.</p>
        <a href="#features" class="btn btn-primary btn-lg mt-4">Explore Features</a>
    </div>

    <!-- Features Section -->
    <section id="features" class="container mt-5">
        <h2 class="text-center mb-4">What We Simulate</h2>
        <div class="row">
            <!-- Social Media Profiling -->
            <div class="col-md-4 text-center mb-4">
                <div class="feature-icon mb-3">
                    <i class="bi bi-person-circle" style="font-size: 3rem;"></i>
                </div>
                <h4>Social Media Profiling</h4>
                <p>Track behavior, followers, posts, and influence across social networks.</p>
            </div>

            <!-- VPN Tracking -->
            <div class="col-md-4 text-center mb-4">
                <div class="feature-icon mb-3">
                    <i class="bi bi-shield-lock" style="font-size: 3rem;"></i>
                </div>
                <h4>VPN Tracking</h4>
                <p>Monitor VPN usage and masked locations or IPs to see how easily they can be concealed.</p>
            </div>

            <!-- Medical Data Exposure -->
            <div class="col-md-4 text-center mb-4">
                <div class="feature-icon mb-3">
                    <i class="bi bi-heart" style="font-size: 3rem;"></i>
                </div>
                <h4>Medical Data Exposure</h4>
                <p>See how sensitive health information can be exposed to unauthorized parties.</p>
            </div>
        </div>

        <div class="row">
            <!-- Voice Snippets -->
            <div class="col-md-4 text-center mb-4">
                <div class="feature-icon mb-3">
                    <i class="bi bi-mic" style="font-size: 3rem;"></i>
                </div>
                <h4>Voice Snippets</h4>
                <p>Learn how recorded conversations are stored and analyzed.</p>
            </div>

            <!-- Camera Access Logs -->
            <div class="col-md-4 text-center mb-4">
                <div class="feature-icon mb-3">
                    <i class="bi bi-camera" style="font-size: 3rem;"></i>
                </div>
                <h4>Camera Access Logs</h4>
                <p>Understand how your webcam and microphone can be activated without your knowledge.</p>
            </div>

            <!-- Data Breach Simulation -->
            <div class="col-md-4 text-center mb-4">
                <div class="feature-icon mb-3">
                    <i class="bi bi-exclamation-triangle" style="font-size: 3rem;"></i>
                </div>
                <h4>Data Breach Simulation</h4>
                <p>See the impact and consequences of your personal data leaking into the wrong hands.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 text-center">
        <p>© {{now()->get('year')}} XKEYSCORE - All rights reserved.</p>
        <p><a href="https://github.com/tauseedzaman/XKEYSCORE" class="text-light" target="_blank">View on GitHub</a></p>
    </footer>

    <!-- Bootstrap 5 Script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
