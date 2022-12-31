@extends('layouts.main')
@section('dani')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h2>
                {{ $single_post->title }}
            </h2>
            <h5>
                Oleh:
                <a href="#" class="text-decoration-none">{{ $single_post->author->name }}
                </a> in
                <a href="/posts/category/{{ $single_post->category->slug }}" class="text-decoration-none">
                    {{ $single_post->category->name }}
                </a>
            </h5>
            <p>
                {!! $single_post->body !!}
            </p>
            <a href="/posts">Back to Posts</a>
        </div>
    </div>
@endsection
