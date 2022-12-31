@extends('layouts.main')
@section('dani')
    <article>
        <h3>
            Detail Dosen : {{ $dosen->nama }}
        </h3>

        <div class="table-responsive text-justify">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="col">Jurusan</th>
                        <th scope="col">:</th>
                        <th><a href="/dosen/jurusan/{{ $dosen->jurusan->slug }}">
                        {{ $dosen->jurusan->name }}
                        </a></th>
                    </tr>
                    <tr>
                        <th scope="col">NIDN</th>
                        <th scope="col">:</th>
                        <th scope="col">{{ $dosen->nidn }}</th>
                    </tr>
                    <tr>
                        <th scope="col">NIP</th>
                        <th scope="col">:</th>
                        <th scope="col">{{ $dosen->nip }}</th>
                    </tr>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">:</th>
                        <th scope="col">{{ $dosen->nama }}</th>
                    </tr>
                    <tr>
                        <th scope="col">Contact Person</th>
                        <th scope="col">:</th>
                        <th scope="col">{{ $dosen->no_tlp }}</th>
                    </tr>
                    <tr>
                        <th scope="col">Alamat</th>
                        <th scope="col">:</th>
                        <th scope="col">{{ $dosen->alamat }}</th>
                    </tr>
                </tbody>
            </table>
          </div>
        
    </article>
    <a href="/dosen">Back to Dosen</a>
@endsection
