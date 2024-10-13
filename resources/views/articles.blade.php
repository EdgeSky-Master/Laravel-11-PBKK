<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($articles as $post )
      
    
    <article class="py-8 max-w-screen-md border-b border-gray-300">
      <a href="/articles/{{ $post['slug'] }}"><h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 hover:underline">{{ $post ['title'] }}</h2></a>
      <div class="text-base text-gray-500">
        By
        <a href="/authors/{{ $post->author->id }}" class="hover:underline">{{ $post->author->name }}</a> | {{ $post->created_at->format('j F Y') }}
        in
        <a href="/categories/{{ $post->category->slug }}" class="hover:underline">{{ $post->category->name }}</a>
      </div>
      <p class="my-4 font-light">{{ Str::limit($post['content'],150) }}</a>
        <a href="/articles/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>
    @endforeach
  </x-layout>