<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $table = 'pertanyaans';
    protected $fillable = [
        'Isi_pertanyaan'
    ];

    public function opsiJawaban()
    {
        return $this->hasMany(OpsiJawaban::class, 'id_pertanyaan');
    }

    public function hasilSurvey()
    {
        return $this->hasMany(HasilSurvei::class);
    }
}
