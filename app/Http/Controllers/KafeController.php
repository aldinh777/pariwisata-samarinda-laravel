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
        $slug = $request->input('slug');
        if ($slug) {
            return Kafe::firstWhere('slug', $slug);
        }

        $limit = $request->input('limit');
        if ($limit) {
            $except = $request->input('except');
            if ($except) {
                return Kafe::where('slug', '!=', $except)->limit($limit)->get();
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
