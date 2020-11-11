<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkingSpace;

class WorkingSpaceController extends Controller
{
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
}
