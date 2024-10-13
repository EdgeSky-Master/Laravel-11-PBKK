<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <article class="py-8 max-w-screen-md border-b">
      
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $article['title'] }}</h2>
      <div class="text-base text-gray-500">
        <a href="/authors/{{ $article->author->username }}">{{ $article->author->name }}</a> | {{ $article->created_at->format('j F Y') }}
      </div>
      <p class="my-4 font-light">{{ $article['content'] }}</a>
        <a href="/articles/" class="font-medium text-blue-500 hover:underline">&laquo;Back to articles</a>
    </article>
    
  </x-layout>