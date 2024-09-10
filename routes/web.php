<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['owner' => 'Muhammad Yusuf Haidar Khairullah']);
});
