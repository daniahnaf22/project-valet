@extends('layouts.main')
@section('dani')
    <article>
        <h3>
            Detail Mahasiswa
        </h3>

        <div class="table-responsive text-justify">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">:</th>
                        <th scope="col">{{ $mhs->name }}</th>
                    </tr>
                    <tr>
                        <th scope="col">No BP</th>
                        <th scope="col">:</th>
                        <th scope="col">{{ $mhs->no_bp }}</th>
                    </tr>
                    <tr>
                        <th scope="col">Jurusan</th>
                        <th scope="col">:</th>
                        <th scope="col">{{ $mhs->jurusan->name }}</th>
                    </tr>
                    <tr>
                        <th scope="col">Nama Orang Tua</th>
                        <th scope="col">:</th>
                        <th scope="col">{{ $mhs->nama_orang_tua }}</th>
                    </tr>
                    <tr>
                        <th scope="col">Telepon</th>
                        <th scope="col">:</th>
                        <th scope="col">{{ $mhs->no_tlp }}</th>
                    </tr>
                </tbody>
            </table>
          </div>
        
    </article>
    <a href="/mahasiswa">Back to Index</a>
@endsection
