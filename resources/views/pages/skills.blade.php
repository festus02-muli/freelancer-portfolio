@extends('layouts.app')

@section('title', 'Skills')
@section('description', 'Skills and technologies used by Festus Muli, a freelance web developer.')

@section('content')
  <section class="section container page-hero">
    <h1 class="section-title">Skills</h1>
    <ul class="skills-grid">
      @foreach ($skills as $skill)
        <li>{{ $skill }}</li>
      @endforeach
    </ul>
  </section>
@endsection
