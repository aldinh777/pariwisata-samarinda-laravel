<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Kuliner;

class KulinerController extends Controller
{
    public function list() {
        return view('kuliner.index', [
            'kuliner_all' => Kuliner::all()
        ]);
    }

    public function get(Request $request) {
        $limit = $request->input('limit');
        if ($limit) {
            return Kuliner::limit($limit)->get();
        }
        return Kuliner::all();
    }

    public function search(Request $request) {
        $key = $request->input('key');
        return DB::table('kuliner')->where('nama', 'like', '%'.$key.'%')->orWhere('deskripsi', 'like', '%'.$key.'%')->get();
    }

    public function detail($id) {
        return view('kuliner.detail', [
            'kuliner' => Kuliner::find($id),
            'rekomendasi_all' => Kuliner::where('id', '!=', $id)->limit(3)->get()
        ]);
    }
}
