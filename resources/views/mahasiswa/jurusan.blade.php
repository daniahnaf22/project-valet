@extends('layouts.main')

@section('dani')
    <h1 class="text-center">Halaman Jurusan Mahasiswa</h1>
    <article>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Bp</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Contact Person</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nama Orang Tua</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no=1;    
                    ?>
                    @foreach ($jurusan as $item)
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td> 
                            <a href="/mahasiswa/single-mhs/{{ $item->no_bp }}">
                                {{ $item->no_bp }}
                            </a>
                        </td>
                        <td> {{ $item->name }}</td>
                        <td> {{ $item->jurusan->name }} </td>
                        <td> {{ $item->no_tlp }}</td>
                        <td> {{ $item->alamat }}</td>
                        <td> {{ $item->nama_orang_tua }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </article>
  
@endsection
