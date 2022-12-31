@extends('layouts.main')

@section('dani')
    <h3 class="mb-4 text-center">{{ $title }}</h1>
    @foreach ($posts as $item)
        <article class="mb-5-border-bottom pb-3">
            <h2><a href="/posts/single-post/{{ $item->slug }}">
                    {{ $item->title }}</a></h2>
            <h5>Oleh: {{ $item->author->name }} in {{ $item->category->name }}</h5>
            <p>{{ $item->excerpt}}</p>
            <a href="/posts/single-post/{{ $item->slug }}" class="text-decoration-none">Read more ..</a>
        </article>
    @endforeach
@endsection
