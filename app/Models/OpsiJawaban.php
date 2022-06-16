<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpsiJawaban extends Model
{
    use HasFactory;
    protected $table = 'opsi_jawabans';
    protected $fillable = [
        'id_pertanyaan', 'pilihan_jawaban', 'poin_jawaban'
    ];

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class, 'id_pertanyaan');
    }

    public function hasilSurvey()
    {
        return $this->hasMany(HasilSurvei::class);
    }
}
