<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::resource('post', PostController::class)->names('post');
Route::resource('Contact', ContactController::class)->names('contact');

Auth::routes(['register' => false]);
