<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\HasilSurvei;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $total_hasil = HasilSurvei::count();
        return ResponseFormatter::success(
            $total_hasil,
            'Data Penduduk Berhasil '
        );
    }
}
