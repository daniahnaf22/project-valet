@extends('layouts.main')
@section('dani')

<article>
    <h2 class="text-center">Halaman Daftar Nilai Mahasiswa</h2>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No BP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no=1;    
                ?>
                @foreach ($nilai as $item)
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td> {{ $item['no_bp'] }}</td>
                    <td> {{ $item['nama'] }}</td>
                    <td> {{ $item['nilai'] }}</td>
                    <td><a href="/nilai/single-nilai/{{ $item['no_bp'] }}">
                       Detail
                    </a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</article>
@endsection