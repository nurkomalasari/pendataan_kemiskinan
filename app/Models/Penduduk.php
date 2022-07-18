<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penduduk extends Model
{
    use SoftDeletes;

    protected $table = 'penduduks';
    protected $fillable = [
        'nik', 'kks', 'nama', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'id_status', 'pekerjaan', 'district_id', 'village_id', 'alamat_lengkap', 'longitude', 'latitude'
    ];

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
    public function village()
    {
        return $this->belongsTo(Village::class, 'village_id');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'id_status');
    }

    public function hasilSurvey()
    {
        return $this->hasMany(HasilSurvei::class, 'id_penduduk');
    }

    public function hasilClustering()
    {
        return $this->hasMany(HasilClustering::class, 'id_penduduk');
    }
    public function clustering()
    {
        return $this->hasMany(Clustering::class, 'id_penduduk');
    }
}
