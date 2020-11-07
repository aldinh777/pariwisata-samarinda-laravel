<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kafe;

class KafeController extends Controller
{
    public function list() {
        return view('kafe.index', [
            'kafe_all' => Kafe::all()
        ]);
    }

    public function detail($id) {
        return view('kafe.detail', [
            'kafe' => Kafe::find($id),
            'rekomendasi_all' => Kafe::limit(3)->get()
        ]);
    }
}
