<?php

namespace App\Exports;

use App\Models\HasilClustering;
use App\Models\HasilSurvei;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class HasilSurveiExport implements FromCollection, WithHeadings, WithMapping
{

    public function headings(): array
    {
        return [
            'id', 'penduduk', 'kecamatan', 'id_opsi_jawaban', 'tanggal'
        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return HasilClustering::with('penduduk')->get();
    }

    public function map($request): array
    {
        return [
            $request->id,
            $request->penduduk->nama,
            $request->penduduk->district->name,
            $request->id_opsi_jawaban,
            $request->tanggal,
        ];
    }
}
