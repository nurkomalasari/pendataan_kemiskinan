<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\HasilSurvei;
use App\Models\Image;
use App\Models\OpsiJawaban;
use App\Models\Penduduk;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HasilSurveyController extends Controller
{



    public function store(Request $request)
    {
        // return response()->json(explode(",", $request->id_opsi_jawaban));

        $hasil = HasilSurvei::with('opsiJawaban', 'penduduk')->create([
            'id_penduduk' => $request->id_penduduk,
            'id_opsi_jawaban' => $request->id_opsi_jawaban,
            'tanggal' => $request->tanggal,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,

        ]);

        $isi = explode(",", $request->id_opsi_jawaban);
        $id_penduduk = $request->id_penduduk;
        Penduduk::where('id', $id_penduduk)->update(array('status_survey' => 'Sudah disurvey'));
        DB::insert('insert into clustering ( id_penduduk,X1,X2,X3,X4,X5,X6,X7,X8,X9,X10,X11,X12,X13,X14) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$request->id_penduduk, $isi[0], $isi[1], $isi[2], $isi[3], $isi[4], $isi[5], $isi[6], $isi[7], $isi[8], $isi[9], $isi[10], $isi[11], $isi[12], $isi[13]]);
        foreach ($request->file('images') as $imagefile) {
            $image = new Image;
            $path = $imagefile->store('/images/resource', ['disk' =>   'my_files']);
            $image->url = $path;
            $image->hasil_survey_id = $hasil->id;
            $image->save();
        }


        if ($hasil) {
            return ResponseFormatter::success(
                $hasil,
                'Data hasil Berhasil di ambil'
            );
        } else {
            return ResponseFormatter::error(
                null,
                'Data Tidak Ada',
                404
            );
        }
        return response()->json(['Hasil survey created successfully.', ($hasil), ($image)]);
    }
}
