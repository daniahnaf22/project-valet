<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Nilai;

class NilaiController extends Controller {
    public function indexNilai() {
        return view('nilai.index', [
            'title' => 'Nilai',
            'active' => 'nilai',
            'nilai' => Nilai::all()
        ]);
    }
    

    public function singleNilai($no_bp) {
        return view('nilai.single-nilai', [
            'title' => 'Single-Detail',
            'active' => 'nilai',
            'detail_nobp' => Nilai::detail($no_bp),
        ]);
    }

 
}

?>