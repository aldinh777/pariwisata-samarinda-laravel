<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Kafe;

class KafeController extends Controller
{
    public function list() {
        return view('kafe.index', [
            'kafe_all' => Kafe::all()
        ]);
    }

    public function get(Request $request) {
        $id = $request->input('id');
        if ($id) {
            return Kafe::find($id);
        }

        $limit = $request->input('limit');
        if ($limit) {
            $except = $request->input('exceptId');
            if ($except) {
                return Kafe::where('id', '!=', $except)->limit($limit)->get();
            }
            return Kafe::limit($limit)->get();
        }

        return Kafe::all();
    }

    public function search(Request $request) {
        $key = $request->input('key');
        return DB::table('kafe')->where('nama', 'like', '%'.$key.'%')->orWhere('deskripsi', 'like', '%'.$key.'%')->get();
    }

    public function detail($id) {
        return view('kafe.detail', [
            'kafe' => Kafe::find($id),
            'rekomendasi_all' => Kafe::where('id', '!=', $id)->limit(3)->get()
        ]);
    }
}
