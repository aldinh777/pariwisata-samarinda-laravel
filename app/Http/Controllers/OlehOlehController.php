<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\OlehOleh;

class OleholehController extends Controller
{
    // Views
    public function list() {
        return view('oleholeh.index', [
            'oleholeh_all' => OlehOleh::all()
        ]);
    }

    public function detail($id) {
        return view('oleholeh.detail', [
            'oleholeh' => OlehOleh::find($id),
            'rekomendasi_all' => OlehOleh::where('id', '!=', $id)->limit(3)->get()
        ]);
    }

    // Apis
    public function get(Request $request) {
        $slug = $request->input('slug');
        if ($slug) {
            return OlehOleh::firstWhere('slug', $slug);
        }

        $limit = $request->input('limit');
        if ($limit) {
            $except = $request->input('except');
            if ($except) {
                return OlehOleh::where('slug', '!=', $except)->limit($limit)->get();
            }
            return OlehOleh::limit($limit)->get();
        }

        return OlehOleh::all();
    }

    public function search(Request $request) {
        $key = $request->input('key');
        return DB::table('oleh_oleh')->where('nama', 'like', '%'.$key.'%')->orWhere('deskripsi', 'like', '%'.$key.'%')->get();
    }
    
    public function create(Request $request) {
        $oleholeh = new OlehOleh();
        $oleholeh->nama = $request->input('nama');
        $oleholeh->deskripsi_singkat = $request->input('deskripsi_singkat');
        $oleholeh->deskripsi = $request->input('deskripsi');
        $oleholeh->gambar = '';
        $oleholeh->slug = strtolower(str_replace(' ', '-', $request->input('nama')));
        $oleholeh->save();
        return ['status' => 'created', 'data' => $oleholeh];
    }

    public function update(Request $request) {
        // $oleholeh = OlehOleh::firstWhere('slug', $request->input('slug'));
        return ['Success' => true];
        $oleholeh->nama = $request->input('nama');
        $oleholeh->deskripsi_singkat = $request->input('deskripsi_singkat');
        $oleholeh->deskripsi = $request->input('deskripsi');
        // $oleholeh->gambar = '';
        $oleholeh->save();
        return ['status' => 'updated', 'data' => $oleholeh];
    }

    public function delete(Request $request) {
        $slug = $request->input('slug');
        $oleholeh = OlehOleh::firstWhere('slug', $slug);
        $oleholeh->delete();
        return ['status' => 'deleted', 'data' => $oleholeh];
    }
}
