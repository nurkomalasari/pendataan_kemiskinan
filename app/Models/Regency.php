<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    protected $table = 'regencies';


    // Inverse
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    // Regency -> District (One to Many)
    public function districts()
    {
        return $this->hasMany(District::class);
    }

    // Regency -> Store (One to Many)
    public function stores()
    {
        return $this->hasOne(Store::class);
    }

    public function alamat()
    {
        return $this->belongsTo(Alamat::class, 'id');
    }
}
