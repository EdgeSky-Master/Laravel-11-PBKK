<?php

use App\Models\Article;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'owner' => 'Muhammad Yusuf Haidar Khairullah']);
});

Route::get('/articles', function () {
    return view('articles', ['title' => 'Articles', 'articles' => Article::allArticle()]);
});

Route::get('/articles/{slug}', function ($slug) {
    $article = Article::findArticle($slug);


    if (!$article) {
        abort(404, 'Article not found');
    }

    return view('article', ['title' => 'single article', 'article' => $article]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
