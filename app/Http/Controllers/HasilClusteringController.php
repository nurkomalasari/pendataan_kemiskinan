<?php

namespace App\Http\Controllers;

use App\Models\HasilClustering;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HasilClusteringController extends Controller
{
    public function index()
    {

        return view('hasilClustering.hasil_clustering');
    }

    public function read()
    {
        $clustering = HasilClustering::with(['penduduk.district'])->orderBy('FIELD1', 'DESC')->get();
        // dd($clustering);

        return view('hasilClustering.read', compact('clustering'));
    }

    public function getHasilClustering()
    {
        $clustering = Http::get('http://127.0.0.1:5000/postInputanSurvey');
        $data = $clustering->json();
        return redirect('/hasilClustering');
    }

    public function chart()
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
            $array[++$key] = [$value->cluster, $value->number];
        }

        return view('chart', compact('array'));
    }

    public function clusterByDistrict()
    {
        $data = HasilClustering::where('cluster', 1)->get();
        dd($data);
    }

    public function clusterDua()
    {
        $data = HasilClustering::where('cluster', 2)->get();
        dd($data);
    }

    public function clusterSatu()
    {
        $data = HasilClustering::with(['penduduk.district'])->where('cluster', 0)->get();
        dd($data);
    }

    public function echart()
    {
        $cluster_one = HasilClustering::where('cluster', 0)->get();
        $cluster_two = HasilClustering::where('cluster', 1)->get();
        $cluster_theere = HasilClustering::where('cluster', 2)->get();
        $miskin = count($cluster_one);
        $menengah = count($cluster_two);
        $tidak_miskin = count($cluster_theere);

        return view('chart', compact('miskin', 'menengah', 'tidak_miskin'));
    }
}
