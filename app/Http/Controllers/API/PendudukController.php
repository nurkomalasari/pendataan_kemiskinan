<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Penduduk;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduk = Penduduk::with(['district', 'village'])->get();
        if ($penduduk) {
            return ResponseFormatter::success(
                $penduduk,
                'Data Penduduk Berhasil ditampilkan'
            );
        } else {
            return ResponseFormatter::error(
                null,
                'Data Tidak Ada',
                404
            );
        }
    }

    public function pendudukById($id)
    {
        $data = Penduduk::with(['district', 'village'])->findOrFail($id);
        if ($data) {
            return ResponseFormatter::success(
                $data,
                'Data Penduduk berdasarkan Berhasil ditampilkan'
            );
        } else {
            return ResponseFormatter::error(
                null,
                'Data Tidak Ada',
                404
            );
        }
    }
    public function searchByDistrict(Request $request)
    {
        $penduduk = Penduduk::where('district_id', $request->input('district_id'))->get();
        if ($penduduk) {
            return ResponseFormatter::success(
                $penduduk,
                'Data Penduduk berdasarkan district Berhasil ditampilkan'
            );
        } else {
            return ResponseFormatter::error(
                null,
                'Data Tidak Ada',
                404
            );
        }
    }
    public function districtAll()
    {
        $districts = District::where('regency_id', '3212')->get();
        if ($districts) {
            return ResponseFormatter::success(
                $districts,
                'Data district Berhasil ditampilkan'
            );
        } else {
            return ResponseFormatter::error(
                null,
                'Data Tidak Ada',
                404
            );
        }
    }



    public function create(Request $request)
    {

        $penduduk = Penduduk::create([
            'nama'    =>  $request->nama,
            'tanggal_lahir'     =>  $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama'     =>  $request->agama,
            'id_status'     =>  $request->id_status,
            'pekerjaan'     =>  $request->pekerjaan,
            'district_id'     =>  $request->district_id,
            'village_id'     =>  $request->village_id,
            'alamat_lengkap'     =>  $request->alamat_lengkap,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
        ]);
        if ($penduduk) {
            return ResponseFormatter::success(
                $penduduk,
                'Data Penduduk Berhasil ditambahkan'
            );
        } else {
            return ResponseFormatter::error(
                null,
                'Data Tidak berhasil ditambahkan',
                404
            );
        }
    }

    public function show($id)
    {
        $penduduk = Penduduk::find($id);
        if (is_null($penduduk)) {
            return ResponseFormatter::success(
                $penduduk,
                'Data Penduduk Berhasil '
            );
        } else {
            return ResponseFormatter::error(
                null,
                'Data Tidak berhasil ditambahkan',
                404
            );
        }
    }

    public function update(Request $request, $id)
    {
        // $pertanyaan = $request->Isi_pertanyaan;
        $penduduk = Penduduk::find($id)
            ->update([
                'nama'    =>  $request->nama,
                'tanggal_lahir'     =>  $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama'     =>  $request->agama,
                'id_status'     =>  $request->id_status,
                'pekerjaan'     =>  $request->pekerjaan,
                'district_id'     =>  $request->district_id,
                'village_id'     =>  $request->village_id,
                'alamat_lengkap'     =>  $request->alamat_lengkap,
                'longitude' => $request->longitude,
                'latitude' => $request->latitude,
            ]);
        if ($penduduk) {
            return ResponseFormatter::success(
                $penduduk,
                'Data Penduduk Berhasil diupdate '
            );
        } else {
            return ResponseFormatter::error(
                null,
                'Data Tidak berhasil diupdate',
                404
            );
        }
    }

    public function delete($id)
    {
        $penduduk = Penduduk::find($id);
        $penduduk->delete();
        # code...
        return "Pertanyaan berhasil didelete";
    }
}
