<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Kafe;

class KafeController extends Controller
{
    // Views
    public function list() {
        return view('kafe.index', [
            'kafe_all' => Kafe::all()
        ]);
    }


    public function detail($id) {
        return view('kafe.detail', [
            'kafe' => Kafe::find($id),
            'rekomendasi_all' => Kafe::where('id', '!=', $id)->limit(3)->get()
        ]);
    }

    // Apis
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

    public function getLogged(Request $request) {
        $kafe = $this->get($request);

        return response()->json([
            'data' => $kafe,
            'loggedIn' => Auth::check()
        ]);
    }
    
    public function create(Request $request) {
        $kafe = new Kafe();
        $kafe->nama = $request->input('nama');
        $kafe->alamat = $request->input('alamat');
        $kafe->jam_buka = $request->input('jam_buka');
        $kafe->deskripsi = $request->input('deskripsi');
        $kafe->lat = $request->input('lat');
        $kafe->lng = $request->input('lng');
        $kafe->gambar = ImageHandler::upload($this, $request, '/kafe');
        $kafe->slug = strtolower(str_replace(' ', '-', $request->input('nama')));
        $kafe->save();
        return response()->json([
            'status' => 'created',
            'data' => $kafe,
            'logged_in' => Auth::check()
        ]);
    }

    public function update(Request $request) {
        $kafe = Kafe::firstWhere('slug', $request->input('slug'));
        $kafe->nama = $request->input('nama');
        $kafe->alamat = $request->input('alamat');
        $kafe->jam_buka = $request->input('jam_buka');
        $kafe->deskripsi = $request->input('deskripsi');
        $kafe->lat = $request->input('lat');
        $kafe->lng = $request->input('lng');
        $gambar = ImageHandler::upload($this, $request, '/kafe');
        if ($gambar != '') {
            $kafe->gambar = $gambar;
        }
        $kafe->save();
        return response()->json([
            'status' => 'updated',
            'data' => $kafe,
            'logged_in' => Auth::check()
        ]);
    }

    public function delete(Request $request) {
        $slug = $request->input('slug');
        $kafe = Kafe::firstWhere('slug', $slug);
        $kafe->delete();
        return response()->json([
            'status' => 'deleted',
            'data' => $kafe,
            'logged_in' => Auth::check()
        ]);
    }
}
