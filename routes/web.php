<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Articles
{
    public static function allArticle()
    {
        return
            [
                [
                    'id' => 1,
                    'slug' => 'article-title-1',
                    'title' => 'Article Title 1',
                    'author' => 'Muhammad Yusuf Haidar Khairullah',
                    'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat itaque, qui officiis dignissimos mollitia placeat error officia ipsa cumque veritatis nihil explicabo deserunt, vel nostrum obcaecati ipsam, voluptatum eius consequatur.'
                ],
                [
                    'id' => 2,
                    'slug' => 'article-title-2',
                    'title' => 'Article Title 2',
                    'author' => 'Muhammad Yusuf Haidar Khairullah',
                    'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque ipsam culpa laborum est cum quasi architecto sit, consequatur at eaque ipsum earum! Doloremque, voluptate voluptatibus laudantium officiis culpa molestiae non!'
                ]
            ];
    }
}

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'owner' => 'Muhammad Yusuf Haidar Khairullah']);
});

Route::get('/articles', function () {
    return view('articles', ['title' => 'Articles', 'articles' => Articles::allArticle()]);
});

Route::get('/articles/{slug}', function ($slug) {
    $post = Arr::first(Articles::allArticle(), function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('article', ['title' => 'single article', 'article' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
