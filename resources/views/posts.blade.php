@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>

    @if($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
            <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title  }}</a></h5>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <p class="card-text"><small>By <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> on <a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></small>
            <small class="text-muted">{{ $posts[0]->created_at->diffForHumans()}}</small></p>
            <p class="card-text">
                <a class="btn btn-primary btn-sm" href="/posts/{{ $posts[0]->slug }}">Readmore</a>
            </p>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-lg-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="position-absolute bg-primary p-1 text-white"><small>{{ $post->category->name }} </small></div>
                        <div class="row g-0">
                          <div class="col-md-6">
                            <img src="https://source.unsplash.com/400x600?{{ $post->category->name }}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-6">
                            <div class="card-body">
                              <h5 class="card-title">{{ $post->title }}</h5>
                              <p class="card-text">{{ $post->excerpt }}</p>
                              <p class="card-text">
                                <small>By <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a></small>
                                <small class="text-muted">{{ $posts[0]->created_at->diffForHumans()}}</small>
                              </p>
                              <p class="card-text">
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary btn-sm">Readmore</a>
                              </p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- @foreach ($posts->skip(1) as $post)
       <article class="mt-5">
            <a href="/posts/{{ $post->slug }}"><h2>{{ $post->title  }}</h2></a>
            <div><small>By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> on <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></small></div>
            <p>
                {{ $post->excerpt }}
            </p>
            
            <a href="/posts/{{ $post->slug }}">Readmore</a>
       </article>
    @endforeach --}}
@endsection