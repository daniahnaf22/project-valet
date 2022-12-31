<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller {
    public function index() {
        return view('mahasiswa.index', [
            'title' => 'Mahasiswa',
            'active' => 'mahasiswa',
            'mahasiswa' => Mahasiswa::all()
        ]);
    }

    public function single(Mahasiswa $mhs) {
        return view('mahasiswa.single-mhs', [
            'title' => 'Mahasiswa',
            'active' => 'mahasiswa',
            'mhs' => $mhs
        ]);

    }
} 

?>