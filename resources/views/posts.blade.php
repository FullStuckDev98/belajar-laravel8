@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>
    @foreach ($posts as $post)
       <article class="mt-5">
            <a href="/posts/{{ $post->slug }}"><h2>{{ $post->title  }}</h2></a>
            <div><small>By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> on <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></small></div>
            <p>
                {{ $post->excerpt }}
            </p>
            
            <a href="/posts/{{ $post->slug }}">Readmore</a>
       </article>
    @endforeach
@endsection