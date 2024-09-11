<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=> 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About','owner' => 'Muhammad Yusuf Haidar Khairullah']);
});

Route::get('/blog', function(){
    return view('blog', ['title' => 'Articles']);
});
Route::get('/contact', function(){
    return view('contact', ['title' => 'Contact']);
});
