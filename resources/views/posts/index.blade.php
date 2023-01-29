@extends('layouts.main')

@section('dani')
<div class="row justify-content-center">
    <div class="col-lg-6 mt-3">
        <h3 class="text-center mb-3">{{ $title }}</h3>
        <form action="/posts">
          @if (request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
      @endif
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="search" placeholder="Search" value="{{ request('search') }}">
            <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
          </div>
        </form>
          
    </div>

</div>
    @if ($posts->count())
        <div class="card">

            <img class="card-img-top" src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}"
                alt="Title">
            <div class="card-body text-center">
                <h4 class="card-title"><a class="text-decoration-none" href="/posts/single-post/{{ $posts[0]->slug }}">
                        {{ $posts[0]->title }}</a></h4>
                <p>
                    <small class="text-mute">
                        Oleh:
                        <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">
                            {{ $posts[0]->author->name }}
                        </a> in
                        <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
                            {{ $posts[0]->category->name }}</a>
                    </small>
                </p>
                <p class="card-text">
                    {{ $posts[0]->excerpt }}
                </p>
              <a href="/posts/single-post/{{$posts[0]->slug }}" class="btn btn-success">Read More ..</a>
            </div>
        </div>
    
    <div class="row mt-4">
        @foreach ($posts->skip(1) as $item)
            <div class="col-md-4 mb-2">
                <div class="card text-center">
                    <div class="position-absolute text-white px-3 py-2" style="background-color: rgba(0, 0, 0, 0.6)">
                        {{ $item->category->name }}
                    </div>
                    <img class="card-img-top" src="https://source.unsplash.com/1200x400?{{ $item->category->name }}"
                        alt="Title">
                    <div class="card-body">
                        <h4 class="card-title"><a class="text-decoration-none"
                                href="/posts/single-post/{{ $item->slug }}">
                                {{ $item->title }}</a></h4>
                        <p>
                            <small class="text-mute">
                                <a href="/posts?author={{ $item->author->username }}" class="text-decoration-none">
                                    {{ $item->author->name }}
                                </a>
                                {{ $item->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">
                            {{ $item->excerpt }}
                        </p>
                        <a class="text-decoration-none btn btn-success" 
                        href="/posts/single-post/{{ $item->slug }}">Read More...
                        </a>
                      
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif
<div class="d-flex justify-content-end">
    {{ $posts->links() }}
</div>
   
@endsection
