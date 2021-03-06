<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\WorkingSpace;

class WorkingSpaceController extends Controller
{
    // Views
    public function list() {
        return view('workingspace.index', [
            'workingspace_all' => WorkingSpace::all()
        ]);
    }

    public function detail($id) {
        return view('workingspace.detail', [
            'workingspace' => WorkingSpace::find($id),
            'rekomendasi_all' => WorkingSpace::where('id', '!=', $id)->limit(3)->get()
        ]);
    }

    // Apis
    public function get(Request $request) {
        $slug = $request->input('slug');
        if ($slug) {
            return WorkingSpace::firstWhere('slug', $slug);
        }

        $limit = $request->input('limit');
        if ($limit) {
            $except = $request->input('except');
            if ($except) {
                return WorkingSpace::where('slug', '!=', $except)->limit($limit)->get();
            }
            return WorkingSpace::limit($limit)->get();
        }

        return WorkingSpace::all();
    }

    public function search(Request $request) {
        $key = $request->input('key');
        return DB::table('working_space')->where('nama', 'like', '%'.$key.'%')->orWhere('deskripsi', 'like', '%'.$key.'%')->get();
    }
    
    public function getLogged(Request $request) {
        $workingspace = $this->get($request);

        return response()->json([
            'data' => $workingspace,
            'loggedIn' => Auth::check()
        ]);
    }
    
    public function create(Request $request) {
        $workingspace = new WorkingSpace();
        $workingspace->nama = $request->input('nama');
        $workingspace->alamat = $request->input('alamat');
        $workingspace->jam_buka = $request->input('jam_buka');
        $workingspace->deskripsi = $request->input('deskripsi');
        $workingspace->lat = $request->input('lat');
        $workingspace->lng = $request->input('lng');
        $workingspace->gambar = ImageHandler::upload($this, $request, '/workingspace');
        $workingspace->slug = strtolower(str_replace(' ', '-', $request->input('nama')));
        $workingspace->save();
        return response()->json([
            'status' => 'created',
            'data' => $workingspace,
            'logged_in' => Auth::check()
        ]);
    }

    public function update(Request $request) {
        $workingspace = WorkingSpace::firstWhere('slug', $request->input('slug'));
        $workingspace->nama = $request->input('nama');
        $workingspace->alamat = $request->input('alamat');
        $workingspace->jam_buka = $request->input('jam_buka');
        $workingspace->deskripsi = $request->input('deskripsi');
        $workingspace->lat = $request->input('lat');
        $workingspace->lng = $request->input('lng');
        $gambar = ImageHandler::upload($this, $request, '/workingspace');
        if ($gambar != '') {
            $workingspace->gambar = $gambar;
        }
        $workingspace->save();
        return response()->json([
            'status' => 'updated',
            'data' => $workingspace,
            'logged_in' => Auth::check()
        ]);
    }

    public function delete(Request $request) {
        $slug = $request->input('slug');
        $workingspace = WorkingSpace::firstWhere('slug', $slug);
        $workingspace->delete();
        return response()->json([
            'status' => 'deleted',
            'data' => $workingspace,
            'logged_in' => Auth::check()
        ]);
    }
}
