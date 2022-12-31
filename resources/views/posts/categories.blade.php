@extends('layouts.main')

@section('dani')
    <div class="row">
        @foreach ($categories as $item)
            <div class="col-lg-4">
                <a href="/posts/category/{{ $item->slug }}">
                    <div class="card bg-dark text-white">
                        <img class="card-img" src="https://source.unsplash.com/500x400?{{ $item->name }}"
                            alt="{{ $item->name }}">

                        <div class="card-img-overlay d-flex align-center p-0">
                            <h4 class="card-title text-center flex-fill p-4 fs-3"
                                style="background-color: rgba(0, 0, 0, 0.7)">
                                {{ $item->name }}
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
