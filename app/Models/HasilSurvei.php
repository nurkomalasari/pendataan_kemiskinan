<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilSurvei extends Model
{
    use HasFactory;

    protected $table = 'hasil_surveis';
    protected $fillable = [
        'id_penduduk', 'id_opsi_jawaban', 'tanggal', 'longitude', 'latitude'
    ];


    public function opsiJawaban()
    {
        return $this->belongsTo(OpsiJawaban::class, 'id_opsi_jawaban');
    }
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'id_penduduk');
    }
}
