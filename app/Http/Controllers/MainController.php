<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;
use App\Kuliner;
use App\OlehOleh;
use App\Kafe;
use App\Workingspace;

class MainController extends Controller
{
    public function home() {
        return view('index', [
            'wisata_all' => Wisata::limit(8)->get(),
            'kuliner_all' => Kuliner::limit(8)->get(),
            'oleholeh_all' => OlehOleh::limit(8)->get(),
            'kafe_all' => Kafe::limit(8)->get(),
            'workingspace_all' => WorkingSpace::limit(8)->get(),
            ]);
    }
}
