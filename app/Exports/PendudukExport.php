<?php

namespace App\Exports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PendudukExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function headings(): array
    {
        return [
            'id', 'nik', 'kks', 'nama', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'id_status', 'pekerjaan', 'district_id', 'village_id', 'alamat_lengkap', 'longitude', 'latitude', 'Created', 'Update', 'Status_Survey'
        ];
    }
    public function collection()
    {
        return Penduduk::all();
    }
}
