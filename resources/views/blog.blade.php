@extends('layouts.main')

@section('container')
    @foreach ($blog as $blog)
    <article class="mb-4">
        <h2>
            <a href="/blog/{{ $blog["slug"] }}">{{ $blog["title"] }}</a>
        </h2>
        <h5>By: {{ $blog["author"] }}</h5>
        <p>{{ $blog["body"] }}</p>
    </article>
    @endforeach
@endsection
