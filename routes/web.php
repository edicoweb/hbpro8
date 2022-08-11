<?php

use Illuminate\Support\Facades\Route;

$portafolio = [
    ['title' => 'Proyecto1'],
    ['title' => 'Proyecto2'],
    ['title' => 'Proyecto3']
];

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/posts', 'posts.index', compact('portafolio'))->name('posts');
Route::view('/contact', 'contact')->name('contact');

