@extends('layouts.app')

@section('title', 'Home')
@section('description', 'Portfolio of Festus Muli, a freelance web developer building fast, modern websites and applications.')

@section('content')
  <section class="hero container">
    <p class="eyebrow">Freelance Web Developer</p>
    <h1>Hi, I'm Festus Muli.<br />I build clean, reliable web experiences.</h1>
    <p class="hero-sub">
      I help startups and small businesses design, build, and ship modern websites
      and web applications — from first sketch to production launch.
    </p>
    <div class="hero-actions">
      <a href="{{ route('projects') }}" class="btn btn-primary">View my work</a>
      <a href="{{ route('contact') }}" class="btn btn-outline">Get in touch</a>
    </div>
  </section>

  <section class="section container">
    <h2 class="section-title">What I do</h2>
    <div class="about-grid">
      <p>
        I'm a freelance web developer focused on building fast, accessible, and
        maintainable websites and applications. I work directly with founders and
        teams to turn ideas into shipped products.
      </p>
    </div>
    <p><a href="{{ route('about') }}" class="project-link">More about me →</a></p>
  </section>
@endsection
