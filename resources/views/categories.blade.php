@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>
    <ul>
    @foreach ($categories as $cat)
        <li>
            <h2><a href="/categories/{{ $cat->slug }}">{{ $cat->name }}</a></h2>
        </li>
    @endforeach
    </ul>
@endsection