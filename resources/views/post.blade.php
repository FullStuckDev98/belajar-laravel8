@extends('layouts.main')

@section('container')
    <article class="mt-5">
        {{-- with {{ escape }} htmlspecialchar --}}
        <a href="/posts/{{ $post->id }}"><h2>{{ $post->title }}</h2></a>
        <div><small>By Me on <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></small></div>
        {{-- no {!! escape !!} htmlspecialchar --}}
        {!! $post->body !!} 
    </article>
    <a href="/blog">Back to Blog</a>
@endsection