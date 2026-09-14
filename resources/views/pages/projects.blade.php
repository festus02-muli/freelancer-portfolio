@extends('layouts.app')

@section('title', 'Projects')
@section('description', 'Selected projects by Festus Muli, a freelance web developer.')

@section('content')
  <section class="section container page-hero">
    <h1 class="section-title">Projects</h1>
    <div class="projects-grid">
      @foreach ($projects as $project)
        <article class="project-card">
          <div class="project-thumb" aria-hidden="true"></div>
          <h3>{{ $project['title'] }}</h3>
          <p>{{ $project['description'] }}</p>
          <a href="{{ $project['url'] }}" class="project-link">View project →</a>
        </article>
      @endforeach
    </div>
  </section>
@endsection
