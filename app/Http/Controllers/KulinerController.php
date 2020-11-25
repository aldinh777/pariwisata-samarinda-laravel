<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Kuliner;

class KulinerController extends Controller
{
    // Views
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
    
    // Apis
    public function get(Request $request) {
        $slug = $request->input('slug');
        if ($slug) {
            return Kuliner::firstWhere('slug', $slug);
        }

        $limit = $request->input('limit');
        if ($limit) {
            $except = $request->input('except');
            if ($except) {
                return Kuliner::where('slug', '!=', $except)->limit($limit)->get();
            }
            return Kuliner::limit($limit)->get();
        }

        return Kuliner::all();
    }

    public function search(Request $request) {
        $key = $request->input('key');
        return DB::table('kuliner')->where('nama', 'like', '%'.$key.'%')->orWhere('deskripsi', 'like', '%'.$key.'%')->get();
    }

    public function create(Request $request) {
        $kuliner = new Kuliner();
        $kuliner->nama = $request->input('nama');
        $kuliner->deskripsi_singkat = $request->input('deskripsi_singkat');
        $kuliner->deskripsi = $request->input('deskripsi');
        $kuliner->gambar = ImageHandler::upload($this, $request, '/kuliner');
        $kuliner->slug = strtolower(str_replace(' ', '-', $request->input('nama')));
        $kuliner->save();
        return ['status' => 'created', 'data' => $kuliner];
    }

    public function update(Request $request) {
        $kuliner = Kuliner::firstWhere('slug', $request->input('slug'));
        $kuliner->nama = $request->input('nama');
        $kuliner->deskripsi_singkat = $request->input('deskripsi_singkat');
        $kuliner->deskripsi = $request->input('deskripsi');
        $gambar = ImageHandler::upload($this, $request, '/kuliner');
        if ($gambar != '') {
            $kuliner->gambar = $gambar;
        }
        $kuliner->save();
        return ['status' => 'updated', 'data' => $kuliner];
    }

    public function delete(Request $request) {
        $slug = $request->input('slug');
        $kuliner = Kuliner::firstWhere('slug', $slug);
        $kuliner->delete();
        return ['status' => 'deleted', 'data' => $kuliner];
    }
}
