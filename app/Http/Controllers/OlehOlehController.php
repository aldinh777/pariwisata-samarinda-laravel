<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\OlehOleh;

class OleholehController extends Controller
{
    public function list() {
        return view('oleholeh.index', [
            'oleholeh_all' => OlehOleh::all()
        ]);
    }

    public function get(Request $request) {
        $id = $request->input('id');
        if ($id) {
            return OlehOleh::find($id);
        }

        $limit = $request->input('limit');
        if ($limit) {
            $except = $request->input('exceptId');
            if ($except) {
                return OlehOleh::where('id', '!=', $except)->limit($limit)->get();
            }
            return OlehOleh::limit($limit)->get();
        }

        return OlehOleh::all();
    }

    public function search(Request $request) {
        $key = $request->input('key');
        return DB::table('oleh_oleh')->where('nama', 'like', '%'.$key.'%')->orWhere('deskripsi', 'like', '%'.$key.'%')->get();
    }

    public function detail($id) {
        return view('oleholeh.detail', [
            'oleholeh' => OlehOleh::find($id),
            'rekomendasi_all' => OlehOleh::where('id', '!=', $id)->limit(3)->get()
        ]);
    }
}
