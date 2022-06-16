<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClusteringController extends Controller
{
    public function getData()
    {
        $response = Http::get('http://127.0.0.1:5000/silhoutte');
        return $response->json();
    }

    public function index()
    {

        return view('kmeans.clustering');
    }


    public function getDataTampil()
    {
        $response = Http::get('http://127.0.0.1:5000/clustering');
        $data = $response->json();

        return view('kmeans.read', compact(
            'data'
        ));
        // dd($data);
    }
}
