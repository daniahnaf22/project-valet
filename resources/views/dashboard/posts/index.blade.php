@extends('dashboard.layouts.main')

@section('admin')

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        <strong>Informasi</strong> {{ session('success') }}
    </div>

    @endif
    <div class="row mb-3">
        <div class="col-lg-7">
            <a href="/dashboard/posts/create" class="btn btn-success pull-left">
                <span data-feather="plus-circle"></span>
                Tambah
            </a>
        </div>
        <div class="col-lg-5">
            <form action="/dashboard/posts">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" id="search" value="{{ request('search') }}" placeholder="search..">
                    <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
                </div>
            </form>

        </div>
    </div>
   <div class="table-responsive-lg">
   
    
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $item)                
            <tr class="">
                <td scope="row">{{$posts->firstItem() + $loop->index }}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->category->name}}</td>
                <td class="text-center">
                    <a href = "/dashboard/posts/{{  $item->slug }}" class="badge bg-info">
                        <span data-feather="eye"></span>
                    </a>
                    <a href = "/dashboard/posts/{{ $item->slug }}/edit" class="badge bg-warning">
                        <span data-feather="edit"></span>
                    </a>
                    <form action="/dashboard/posts/{{ $item->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button onclick="return confirm('Apakah yakin ingin hapus?')" class="badge bg-danger border-0">
                            <span data-feather="x-circle"></span>
                        </button>
                    </form>
                </td>                
            </tr>
            @endforeach
        </tbody>
    </table>
   </div>

@endsection