@extends('layouts.main')

@section('dani')
    <h1 class="text-center">Halaman Jurusan Dosen</h1>
    <article>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIDN</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Contact Person</th>
                        <th scope="col">Alamat</th>
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
                            <a href="/dosen/single-dosen/{{ $item->nidn }}">
                                {{ $item->nidn }}
                            </a>
                        </td>
                        <td> {{ $item->nip }}</td>
                        <td> {{ $item->nama }}</td>
                        <td> {{ $item->jurusan->name }} </td>
                        <td> {{ $item->no_tlp }}</td>
                        <td> {{ $item->alamat }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </article>
  
@endsection
