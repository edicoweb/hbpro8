<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::resource('/post', PostController::class)->names('post');
Route::view('/contact', 'contact')->name('contact');

