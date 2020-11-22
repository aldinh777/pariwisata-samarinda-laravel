<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Wisata;

class WisataController extends Controller
{
    protected $bandara = ['lat' => -0.4429472, 'lng' => 117.1276766];

    protected function getDistance($lat1, $lng1, $lat2, $lng2) {
        $url = "https://maps.googleapis.com/maps/api/distancematrix/json?"
            ."key=AIzaSyC3Sis_MBeaSHRKlZIPftutQTXQgz5_m8c"
            ."&origins="
            .$lat1.",".$lng1."&destinations="
            .$lat2.",".$lng2."&mode=driving&language=pl-PL";        
        $ch = curl_init();

        print $url;

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $response = curl_exec($ch);
        curl_close($ch);
        $response_a = json_decode($response, true);
        $dist = $response_a['rows'][0]['elements'][0]['distance']['text'];
        $time = $response_a['rows'][0]['elements'][0]['duration']['text'];
    
        return array('distance' => $dist, 'time' => $time);    
    }

    public function list() {
        return view('wisata.index', [
            'wisata_all' => Wisata::all()
        ]);
    }

    public function get(Request $request) {
        $slug = $request->input('slug');
        if ($slug) {
            return Wisata::firstWhere('slug', $slug);
        }

        $limit = $request->input('limit');
        if ($limit) {
            $except = $request->input('except');
            if ($except) {
                return Wisata::where('slug', '!=', $except)->limit($limit)->get();
            }
            return Wisata::limit($limit)->get();
        }

        return Wisata::all();
    }

    public function search(Request $request) {
        $key = $request->input('key');
        return DB::table('wisata')->where('nama', 'like', '%'.$key.'%')->orWhere('deskripsi', 'like', '%'.$key.'%')->get();
    }

    public function detail($id) {
        $wisata = Wisata::find($id);
        // $jarak = $this::getDistance($wisata->lat, $wisata->lng, $this->bandara['lat'], $this->bandara['lng']);

        return view('wisata.detail', [
            'wisata' => $wisata,
            'rekomendasi_all' => Wisata::where('id', '!=', $id)->limit(3)->get(),
        ]);
    }
}
