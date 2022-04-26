
@extends('layouts.main')

@section('container')
    <h2>{{ $post->title }}</h2>
    <h5>{{ $post->author }}</h5>

    <p>By. Rifki Ardian in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <a href="/blog">Kembali</a>
@endsection
