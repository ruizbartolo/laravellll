<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>
<h3>Welcome to my blog</h3>



<article>
  <article class="py-8 max w-screen-md border-b border-gray-300"></article>

  <h2 class="mb-1 text-3xl tracking-light font-bold text-gray-900">{{$post
  ['title']}}</h2>
  </a>
 
  <div>
    <div class="text-base text-gray-500">
    <a href="#"> {{$post['author']}}</a> {{$post->created_at->format('j F Y')}}
  </div>
  <p class="my-4 font-light">{{  $post['body'] }}</p>
     <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline">&laquo;Back to posts </a>
</articel>


</x-layout>