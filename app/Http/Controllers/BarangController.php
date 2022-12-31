<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    public function index()
    {
        return view('barang.index',
            [
                'title' => 'Barang',
                'active' => 'barang',
                'barang' => Barang::all()
            ]
        );
    }

    public function single(Barang $barang)
    {
        return view('barang.single',
            [
                'title' => 'Single Barang',
                'active' => 'barang',
                'single_barang' => $barang
            ]);
    }
}
