<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::resource('blog', PostController::class)->names('post');
Route::resource('Contacto', ContactController::class)->names('contact');

