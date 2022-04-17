@extends('layouts.main')

@section('container')
    @foreach ($blog as $blog)
    <article class="mb-4">
        <h2>
            <a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a>
        </h2>

        <p>{{ $blog->excerpt }}</p>
        
    </article>
    @endforeach
@endsection
