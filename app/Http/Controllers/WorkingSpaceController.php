<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\WorkingSpace;

class WorkingSpaceController extends Controller
{
    public function list() {
        return view('workingspace.index', [
            'workingspace_all' => WorkingSpace::all()
        ]);
    }

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

    public function detail($id) {
        return view('workingspace.detail', [
            'workingspace' => WorkingSpace::find($id),
            'rekomendasi_all' => WorkingSpace::where('id', '!=', $id)->limit(3)->get()
        ]);
    }
}
