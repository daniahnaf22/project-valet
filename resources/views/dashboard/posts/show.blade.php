@extends('dashboard.layouts.main')
@section('admin')
    <div class="row">
        <div class="col-lg-8">
            <h2>
                {{ $single_post->title }}
            </h2>
            <a href="/dashboard/posts" class="btn btn-success">
                <span data-feather="arrow-left"></span>
                Back to My Post
            </a>
            <a href="/dashboard/posts/{{ $single_post->slug }}/edit" class="btn btn-warning">
                <span data-feather="edit"></span>
                Edit
            </a>
            <form action="/dashboard/posts/{{ $single_post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button onclick="return confirm('Apakah yakin ingin hapus?')" class="btn btn-danger">
                    <span data-feather="x-circle"></span> Delete
                </button>
            </form>
          
            <div class="mt-3">   
                <img class="card-img-top " src="https://source.unsplash.com/1200x400?{{ $single_post->category->name }}"
                alt="Title">
            </div>
            
            <article class="my-3 fs-5">
                {!! $single_post->body !!}
            </article>
        </div>
    </div>
@endsection