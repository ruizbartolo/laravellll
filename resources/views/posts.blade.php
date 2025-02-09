<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>
<h3>Welcome to my blog</h3>
@foreach ($posts as $post )


<article>
  <article class="py-8 max w-screen-md border-b border-gray-300"></article>
  <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
  <h2 class="mb-1 text-3xl tracking-light font-bold text-gray-900">{{$post
  ['title']}}</h2>
  </a>
 
  <div>
    <div class="text-base text-gray-500">
    <a href="#"> {{$post['author']}}</a> 2 {{$post->created_at->format('j F Y')}}
  </div>
  <p class="my-4 font-light">{{ Str::limit ($post['body'], 100)}}</p>
     <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo; </a>
</articel>
@endforeach

</x-layout>