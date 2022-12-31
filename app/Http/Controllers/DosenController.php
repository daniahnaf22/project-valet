<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dosen;

class DosenController extends Controller {
    public function index() {
        return view('dosen.index', [
            'title' => 'Dosen',
            'active' => 'dosen',
            'dosen' => Dosen::all()
        ]);
    }

    public function single(Dosen $dosen) {
        return view('dosen.single', [
            'title' => 'Dosen',
            'active' => 'dosen',
            'dosen' => $dosen
        ]);

    }
} 

?>