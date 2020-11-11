<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Wisata;
use App\Kuliner;
use App\OlehOleh;
use App\Kafe;
use App\WorkingSpace;

class MainController extends Controller
{
    protected function searchNameAndDesc($query, $key) {
        return $query->where('nama', 'like', '%'.$key.'%')->orWhere('deskripsi', 'like', '%'.$key.'%')->get();
    }

    public function home() {
        return view('index', [
            'wisata_all' => Wisata::limit(8)->get(),
            'kuliner_all' => Kuliner::limit(8)->get(),
            'oleholeh_all' => OlehOleh::limit(8)->get(),
            'kafe_all' => Kafe::limit(4)->get(),
            'workingspace_all' => WorkingSpace::limit(4)->get(),
            ]);
    }

    public function search(Request $req) {
        $key = $req->input('key');
        $wisata_result = $this::searchNameAndDesc(DB::table('wisata'), $key);
        $kuliner_result = $this::searchNameAndDesc(DB::table('kuliner'), $key);
        $oleholeh_result = $this::searchNameAndDesc(DB::table('oleh_oleh'), $key);
        $kafe_result = $this::searchNameAndDesc(DB::table('kafe'), $key);
        $workingspace_result = $this::searchNameAndDesc(DB::table('working_space'), $key);

        $no_data = false;
        if (count($wisata_result) == 0 && count($kuliner_result) == 0 && count($oleholeh_result) == 0 && count($kafe_result) == 0 && count($workingspace_result) == 0) {
            $no_data = true;
        }

        return view('search', [
            'wisata_all' => $wisata_result,
            'kuliner_all' => $kuliner_result,
            'oleholeh_all' => $oleholeh_result,
            'kafe_all' => $kafe_result,
            'workingspace_all' => $workingspace_result,
            'no_data' => $no_data,
            'key' => $key,
        ]);
    }
}
