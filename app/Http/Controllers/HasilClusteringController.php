<?php

namespace App\Http\Controllers;

use App\Models\HasilClustering;
use App\Models\HasilSurvei;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HasilClusteringController extends Controller
{
    public function index()
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
        // dd($data);
        return view('hasilClustering.dashbboard_clustering', compact('array', 'data'));
    }
    public function hasil_clustering()
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

    public function getHasilSilhouette()
    {
        $clustering = Http::get('http://127.0.0.1:5000/silhoutte');
        $data = $clustering->json();
        return;
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
            if ($value->cluster == 0) {
                $x = 'miskin';
            } elseif ($value->cluster == 1) {
                $x = 'miskin menengah';
            } elseif ($value->cluster == 2) {
                $x = 'Tidak miskin';
            }
            $array[++$key] = [$x, $value->number];
        }
        // dd($array);
        return view('hasilClustering.dashbboard_clustering', compact('array'));
    }

    public function clusterSatu()
    {
        $data = HasilClustering::with('penduduk')->where('cluster', 0)->get();
        return view('hasilClustering.item_data_miskin', compact('data'));
    }

    public function clusterDua()
    {
        $data = HasilClustering::where('cluster', 1)->get();
        return view('hasilClustering.item_data_menengah', compact('data'));
    }

    public function clusterTiga()
    {
        $data = HasilClustering::with(['penduduk.district'])->where('cluster', 2)->get();
        return view('hasilClustering.item_data_tidak_miskin', compact('data'));
    }

    public function clusterPerKecamatan()
    {

        //kec Haurgelis
        $data = Penduduk::where('district_id', 3212010)->with(['hasilClustering'])->get();
        // // kec. gantar
        // $data = Penduduk::with(['hasilClustering'])->where('district_id', 3212011)->get();
        // // Kec. Kroya
        // $data = Penduduk::with(['hasilClustering'])->where('district_id', 3212020)->get();
        // // kec. Gabuswetan
        // $data = Penduduk::with(['hasilClustering'])->where('district_id', 3212030)->get();
        // // kec. Cikedung
        // $data = Penduduk::with(['hasilClustering'])->where('district_id', 3212040)->get();
        // // kec. Terisi
        // $data = Penduduk::with(['hasilClustering'])->where('district_id', 3212041)->get();
        // // kec. Lelea
        // $data = Penduduk::with(['hasilClustering'])->where('district_id', 3212050)->get();




        // $data = Penduduk::with(['hasilClustering'])->where('district_id', 3212011)->get();

        // $data = Penduduk::groupBy('district_id')->get();


        // $data = DB::table('penduduks')
        //     ->select('district_id', DB::raw('count(*) as total'))->select('nama')
        //     ->groupBy('district_id')
        //     ->get();
        dd($data);
    }
}
