<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\OpsiJawaban;
use Illuminate\Http\Request;

class OpsiJawabanController extends Controller
{
    public function index()
    {
        $opsiJawaban = OpsiJawaban::with(['pertanyaan'])->get();
        if ($opsiJawaban) {
            return ResponseFormatter::success(
                $opsiJawaban,
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
