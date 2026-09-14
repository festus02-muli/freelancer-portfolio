@extends('layouts.app')

@section('title', 'Contact')
@section('description', 'Get in touch with Festus Muli, a freelance web developer.')

@section('content')
  <section class="section container page-hero contact-section">
    <h1 class="section-title">Get in touch</h1>
    <p class="contact-sub">Have a project in mind? I'd love to hear about it.</p>
    <a href="mailto:{{ $email }}" class="btn btn-primary">{{ $email }}</a>
  </section>
@endsection
