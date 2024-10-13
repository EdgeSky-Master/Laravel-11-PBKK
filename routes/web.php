<?php

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'owner' => 'Muhammad Yusuf Haidar Khairullah']);
});

Route::get('/articles', function () {
    return view('articles', ['title' => 'Articles', 'articles' => Article::all()]);
});

Route::get('/articles/{article:slug}', function (Article $article) {

    // $article = Article::where('slug', $slug)->first(); other way to get article by slug


    if (!$article) {
        abort(404, 'Article not found');
    }

    return view('article', ['title' => 'single article', 'article' => $article]);
});

Route::get('/authors/{user}', function (User $user) {
    return view('articles', ['title' => 'Article by ' . $user->name, 'articles' => $user->articles]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('articles', ['title' => 'Article in category ' . $category->name, 'articles' => $category->articles]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
