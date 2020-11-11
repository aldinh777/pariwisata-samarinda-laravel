<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuliner;

class KulinerController extends Controller
{
    public function list() {
        return view('kuliner.index', [
            'kuliner_all' => Kuliner::all()
        ]);
    }

    public function detail($id) {
        return view('kuliner.detail', [
            'kuliner' => Kuliner::find($id),
            'rekomendasi_all' => Kuliner::where('id', '!=', $id)->limit(3)->get()
        ]);
    }
}
