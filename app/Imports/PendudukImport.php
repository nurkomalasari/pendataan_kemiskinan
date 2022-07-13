<?php

namespace App\Imports;

use App\Models\District;
use App\Models\Penduduk;
use App\Models\Status;
use App\Models\User;
use App\Models\Village;
use Maatwebsite\Excel\Concerns\ToModel;

class PendudukImport implements ToModel
{
    private $status;

    public function __construct()
    {
        $this->status = Status::select('status_penduduk')->get();
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $statuses = $this->status->where('status_penduduk', $row[4])->first();
        $district = District::where('name', $row[6])->first();
        $village = Village::where('name', $row[7])->first();

        return new Penduduk([
            'nama'             => $row[0],
            'tanggal_lahir'    => $row[1],
            'jenis_kelamin'    => $row[2],
            'agama'            => $row[3],
            'id_status'        => $statuses->id,
            'pekerjaan'        => $row[5],
            'district_id'      => $district->id,
            'village_id'       => $village->id,
            'alamat_lengkap'   => $row[8],
            'longitude'        => $row[9],
            'latitude'         => $row[10],





        ]);
    }
}
