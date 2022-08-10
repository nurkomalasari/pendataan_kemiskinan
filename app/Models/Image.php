<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $fillable = [
        'url', 'hasil_survey_id'
    ];
    public function hasilSurvey()
    {
        return $this->belongsTo(HasilSurvei::class, 'hasil_survey_id');
    }
}
