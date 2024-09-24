<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Article
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

    public static function findArticle($slug)
    {
        // return Arr::first(static::allArticle(), function ($article) use ($slug) {
        //     return $article['slug'] == $slug;
        // });
        // return Arr::first(static::allArticle(), fn($article) => $article['slug'] == $slug)
        return Arr::first(self::allArticle(), fn($article) => $article['slug'] == $slug) ?? abort(404);
    }
}
