<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Festus Muli') | Festus Muli</title>
  <meta name="description" content="@yield('description', 'Portfolio of Festus Muli, a freelance web developer building fast, modern websites and applications.')" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <a href="{{ route('home') }}" class="logo">Festus<span>.</span></a>
      <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
      <nav class="site-nav" id="siteNav">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('skills') }}" class="{{ request()->routeIs('skills') ? 'active' : '' }}">Skills</a>
        <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a>
        <a href="{{ route('testimonials') }}" class="{{ request()->routeIs('testimonials') ? 'active' : '' }}">Testimonials</a>
        <a href="{{ route('contact') }}" class="nav-cta {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
      </nav>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

  <footer class="site-footer">
    <div class="container footer-inner">
      <p>&copy; <span id="year"></span> Festus Muli. All rights reserved.</p>
    </div>
  </footer>

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
