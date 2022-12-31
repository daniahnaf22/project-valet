@extends('layouts.main')

@section('dani')
    <h1 class="text-center">Halaman Barang</h1>
    @foreach ($barang as $item)
        <article>
            <h2><a href="/barang/single-barang/{{ $item->no_resi }}">
                    {{ $item->kode_brg }}</a>
            </h2>
            <h5>Nama Barang: {{ $item->nama_brg }}</h5>
            <h5>Harga Barang: {{ $item->harga_brg }}</h5>
            <h5>Stok Barang: {{ $item->stock }}</h5>

        </article>
    @endforeach
@endsection
