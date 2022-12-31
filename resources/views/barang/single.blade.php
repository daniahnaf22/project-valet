@extends('layouts.main')
@section('dani')
    <article>
        <h2>
            {{ $single_barang->kode_brg }}
        </h2>

        <h5>Nama Barang: {{ $single_barang->nama_brg }}</h5>
        <h5>Harga Barang: {{ $single_barang->harga_brg }}</h5>
        <h5>Stok Barang: {{ $single_barang->stock }}</h5>

    </article>
    <a href="/barang">Back</a>
@endsection