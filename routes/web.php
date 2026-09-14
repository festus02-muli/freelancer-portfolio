<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/skills', [PageController::class, 'skills'])->name('skills');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
