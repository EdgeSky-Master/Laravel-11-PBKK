<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'owner' => 'Muhammad Yusuf Haidar Khairullah']);
});

Route::get('/articles', function () {
    return view('articles', ['title' => 'Articles', 'Articles' => [
        [
            'title' => 'Article Title 1',
            'author' => 'Muhammad Yusuf Haidar Khairullah',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat itaque, qui officiis dignissimos mollitia placeat error officia ipsa cumque veritatis nihil explicabo deserunt, vel nostrum obcaecati ipsam, voluptatum eius consequatur.'
        ],
        [
            'title' => 'Article Title 2',
            'author' => 'Muhammad Yusuf Haidar Khairullah',
            'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque ipsam culpa laborum est cum quasi architecto sit, consequatur at eaque ipsum earum! Doloremque, voluptate voluptatibus laudantium officiis culpa molestiae non!'
        ]
    ]]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
