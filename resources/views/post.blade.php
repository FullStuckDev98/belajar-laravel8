@extends('layouts.main')

@section('container')
    <article class="mt-5">
        <a href="/posts/{{ $post['slug'] }}"><h2>{{ $post['title']  }}</h2></a>
        <p>
            {{ $post['body'] }}
        </p>
    </article>
    <a href="/blog">Back to Blog</a>
@endsection