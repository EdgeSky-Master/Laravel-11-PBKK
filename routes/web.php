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
    // $articles = Article::with(['author', 'category'])->latest()->get();
    $articles = Article::latest()->get();
    return view('articles', ['title' => 'Articles', 'articles' => $articles]);
});

Route::get('/articles/{article:slug}', function (Article $article) {

    // $article = Article::where('slug', $slug)->first(); other way to get article by slug


    if (!$article) {
        abort(404, 'Article not found');
    }

    return view('article', ['title' => 'single article', 'article' => $article]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $articles_from = $user->articles->load('category', 'author');
    return view('articles', ['title' => count($user->articles) . ' Article by ' . $user->name, 'articles' => $user->articles]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $articles_from = $category->articles->load('category', 'author');
    return view('articles', ['title' => count($category->articles) . ' Article in category ' . $category->name, 'articles' => $category->articles]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
