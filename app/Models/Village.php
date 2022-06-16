<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $table = 'villages';

    use HasFactory;

    protected $fillable = [
        'name'
    ];
    // Inverse
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    // Village -> Store (One to Many)
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
        return $this->hasMany(Penduduk::class, 'village_id');
    }

    public function surveyor()
    {
        return $this->hasMany(Surveyor::class, 'village_id');
    }
}
