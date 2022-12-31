<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;

    class JurusanController extends Controller {
        public function index_dsn() {
            return view('dosen.jurusans', [
                'title' => 'Jurusan',
                'active' => 'jurusan',
                'jurusan' => Jurusan::all()
            ]);
        }

        public function jurusan_dsn(Jurusan $jurusan) {
            return view('dosen.jurusan', [
                'title' => 'Jurusan',
                'active' => 'jurusan',
                'jurusan' => $jurusan->dosen
            ]);
        }
        public function index_mhs(Jurusan $jurusan) {
            return view('mahasiswa.jurusans', [
                'title' => 'Jurusan',
                'active' => 'jurusan',
                'jurusan' => $jurusan->mahasiswa
            ]);
        }
        public function jurusan_mhs(Jurusan $jurusan) {
            return view('mahasiswa.jurusan', [
                'title' => 'Jurusan',
                'active' => 'jurusan',
                'jurusan' => $jurusan->mahasiswa
            ]);
        }
    }
?>