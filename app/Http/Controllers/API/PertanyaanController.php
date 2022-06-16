<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $penduduk = Pertanyaan::get();
        if ($penduduk) {
            return ResponseFormatter::success(
                $penduduk,
                'Data opsi jawaban Berhasil di ambil'
            );
        } else {
            return ResponseFormatter::error(
                null,
                'Data Tidak Ada',
                404
            );
        }
    }
}
