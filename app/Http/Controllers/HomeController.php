<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\HasilSurvei;
use App\Models\Penduduk;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('surveyor');
    }

    public function adminHome()
    {
        $districts = District::where('regency_id', '3212')->get();

        $data = DB::table('hasil_clustering')
            ->select(
                DB::raw('cluster as cluster'),
                DB::raw('count(*) as number')
            )
            ->groupBy('cluster')
            ->get();

        $array[] = ['cluster', 'number'];

        foreach ($data as $key => $value) {
            if ($value->cluster == 0) {
                $x = 'miskin';
            } elseif ($value->cluster == 1) {
                $x = 'miskin menengah';
            } elseif ($value->cluster == 2) {
                $x = 'Tidak miskin';
            }
            $array[++$key] = [$x, $value->number];
        }
        $clustering = Http::get('http://127.0.0.1:5000/silhoutte');
        $data = $clustering->json();


        $maps = Penduduk::with(['hasilClustering'])->has('hasilClustering')->get();
        $total_penduduk = Penduduk::all()->count();
        $total_hasil = HasilSurvei::all()->count();
        $total_Pertanyaan = Pertanyaan::all()->count();


        // dd($maps);
        return view('hasilClustering.dashbboard_clustering', compact('data', 'array', 'districts', 'maps', 'total_penduduk', 'total_hasil', 'total_Pertanyaan'));
    }
}
