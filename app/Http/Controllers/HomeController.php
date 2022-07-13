<?php

namespace App\Http\Controllers;

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
        return view('hasilClustering.dashbboard_clustering', compact('data', 'array'));
    }
}
