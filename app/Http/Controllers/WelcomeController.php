<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function welcome()
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
                $x = 'Miskin';
            } elseif ($value->cluster == 1) {
                $x = 'Tidak Miskin';
            }
            $array[++$key] = [$x, $value->number];
        }
        $maps = Penduduk::with(['hasilClustering'])->has('hasilClustering')->get();


        // dd($array);
        return view('welcome', compact('array', 'maps'));
    }
}
