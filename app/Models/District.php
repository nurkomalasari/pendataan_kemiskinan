<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $table = 'districts';
    protected $fillable = [
        'name'
    ];

    // Inverse
    public function regency()
    {
        return $this->belongsTo(Regency::class);
    }

    // District -> Village (One to Many)
    public function villages()
    {
        return $this->hasMany(Village::class);
    }

    // District -> Store (One to Many)
    public function stores()
    {
        return $this->hasOne(Store::class);
    }

    public function alamat()
    {
        return $this->belongsTo(Alamat::class, 'id');
    }
    public function penduduk()
    {
        return $this->hasMany(Penduduk::class, 'district_id');
    }

    public function surveyor()
    {
        return $this->hasMany(District::class, 'district_id');
    }

    public function hasilClustering()
    {
        return $this->hasMany(HasilClustering::class);
    }
}
