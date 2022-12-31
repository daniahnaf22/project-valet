@extends('layouts.main')

@section('dani')
<ul>
    @foreach ($jurusan as $item)
        <li>
            <a href="/mahasiswa/jurusan/{{ $item->slug }}">
                <h3>{{ $item->name }}</h3>
            </a>
        </li>    
    @endforeach
    
</ul>
@endsection