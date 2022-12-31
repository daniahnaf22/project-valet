@extends('layouts.main')

@section('dani')
    <h1 class="text-center">Halaman Daftar Mahasiswa</h1>
    <article>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No BP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Nama Orang Tua</th>
                        <th scope="col">Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no=1;    
                    ?>
                    @foreach ($mahasiswa as $mhs)
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td> 
                            <a href="/mahasiswa/single-mhs/{{ $mhs->no_bp }}">
                                {{ $mhs->no_bp }}
                            </a>
                        </td>
                        <td> {{ $mhs->name }}</td>
                        <td>
                            <a href="/mahasiswa/jurusan/{{ $mhs->jurusan->slug }}" class="text-decoration none">
                                {{ $mhs->jurusan->name }}
                            </a> 
                        </td>
                        <td> {{ $mhs->nama_orang_tua }}</td>
                        <td> {{ $mhs->no_tlp }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </article>
  
@endsection
