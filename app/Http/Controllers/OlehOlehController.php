<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OlehOleh;

class OleholehController extends Controller
{
    public function list() {
        return view('oleholeh.index', [
            'oleholeh_all' => OlehOleh::all()
        ]);
    }

    public function detail($id) {
        return view('oleholeh.detail', [
            'oleholeh' => OlehOleh::find($id),
            'rekomendasi_all' => OlehOleh::limit(3)->get()
        ]);
    }
}
