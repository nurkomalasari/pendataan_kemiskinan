<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'statuses';

    protected $fillable = [
        'status_penduduk'
    ];
    public function penduduk()
    {
        return $this->hasMany(Penduduk::class, 'id_status');
    }
}
