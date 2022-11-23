@extends('layouts.main')

@section('container')
    <article class="mt-5">
        {{-- with {{ escape }} htmlspecialchar --}}
        <a href="/posts/{{ $post->id }}"><h2>{{ $post->title }}</h2></a>
        {{-- no {!! escape !!} htmlspecialchar --}}
        {!! $post->body !!} 
    </article>
    <a href="/blog">Back to Blog</a>
@endsection