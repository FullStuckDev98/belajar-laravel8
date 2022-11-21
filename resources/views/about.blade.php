@extends('layouts.main')

@section('container')
    <h1>Ini adalah halaman about</h1>
    <h2>Nama : {{ $name }}</h2>
    <h2>Bio  : {{ $bio }}</h2>    
@endsection