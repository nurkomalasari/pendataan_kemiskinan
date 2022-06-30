<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilClustering extends Model
{
    use HasFactory;
    protected $table = 'hasil_clustering';
    protected $fillable = [
        'id_penduduk', 'X1', 'X2', 'X3', 'X4', 'X5', 'X6', 'X7', 'X8', 'X9', 'X10', 'X11', 'X12', 'X13', 'X14', 'cluster'
    ];
    public function district()
    {
        return $this->belongsTo(District::class);
    }
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'id_penduduk');
    }

    public function clusterName()
    {
        return $this->belongsTo(ClusterName::class, 'cluster');
    }
}
