<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;

class WisataController extends Controller
{
    public function list() {
        return view('wisata.index', [
            'wisata_all' => Wisata::all()
        ]);
    }

    public function detail($id) {
        return view('wisata.detail', [
            'wisata' => Wisata::find($id),
            'rekomendasi_all' => Wisata::limit(3)->get()
        ]);
    }
}
