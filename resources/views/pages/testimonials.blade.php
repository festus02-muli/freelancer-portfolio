@extends('layouts.app')

@section('title', 'Testimonials')
@section('description', 'What clients say about working with Festus Muli, a freelance web developer.')

@section('content')
  <section class="section container page-hero">
    <h1 class="section-title">Testimonials</h1>
    <div class="testimonials-grid">
      @foreach ($testimonials as $testimonial)
        <blockquote class="testimonial">
          <p>"{{ $testimonial['quote'] }}"</p>
          <cite>— {{ $testimonial['author'] }}</cite>
        </blockquote>
      @endforeach
    </div>
  </section>
@endsection
