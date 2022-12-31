@extends('layouts.main')
@section('dani')
    <h3>Nama : {{ $nama }}</h3>
    <h3>No HP : {{ $no_tlp }}</h3>
    <h3>Alamat : {{ $alamat }}</h3>
    @if ($jekel == 1)
        <h3>Jenis Kelamin : Laki-Laki </h3>
    @else
        <h3>Jenis Kelamin : Perempuan </h3>
    @endif

    <img class="rounded" src="images/{{ $image }}" alt="image" width="80" height="70">
@endsection
