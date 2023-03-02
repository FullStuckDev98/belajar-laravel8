@extends('layouts.main')

@section('container')
    <h1>Post Category : {{ $category }}</h1>
    @foreach ($posts as $post)
       <article class="mt-5">
            <a href="/posts/{{ $post->slug }}"><h2>{{ $post->title  }}</h2></a>
            <div class="small">
                By <a href="/atuhors/{{ $post->author->username }}">{{ $post->author->name  }}</a> on <a href="/categories/{{ $post->category->name }}">{{ $post->category->name }}</a>
            </div>
            <p>
                {{ $post->excerpt }}
            </p>
       </article>
    @endforeach
@endsection