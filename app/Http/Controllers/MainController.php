<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;
use App\Kuliner;

class MainController extends Controller
{
    public function home() {
        return view('index', [
            'wisata_all' => Wisata::limit(8)->get(),
            'kuliner_all' => Kuliner::limit(8)->get(),
            ]);
    }
}
