<?php

namespace App\Imports;

use App\Models\District;
use App\Models\Penduduk;
use App\Models\Status;
use App\Models\Village;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PendudukImport implements ToModel, WithHeadingRow
{


    // public function headingRow(): int
    // {
    //     return 2;
    // }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // $statuses = $this->status->where('status_penduduk', $row[6])->first();
        $district = District::where('name', $row['district_id'])->first();
        $village = Village::where('name', $row['village_id'])->first();
        $status = Status::where('status_penduduk', $row['id_status'])->first();



        Penduduk::create([
            'nik'             => $row['nik'],
            'kks'             => $row['kks'],
            'nama'             => $row['nama'],
            'tanggal_lahir'    => $row['tanggal_lahir'],
            'jenis_kelamin'    => $row['jenis_kelamin'],
            'agama'            => $row['agama'],
            'id_status'        => $status->id,
            'pekerjaan'        => $row['pekerjaan'],
            'district_id'      => $district->id,
            'village_id'       => $village->id,
            'alamat_lengkap'   => $row['alamat_lengkap'],
            'longitude'        => $row['longitude'],
            'latitude'         => $row['latitude'],
        ]);
        // dd($row[6]);
    }
}
