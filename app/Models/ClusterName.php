<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClusterName extends Model
{
    use HasFactory;

    protected $table = 'cluster_names';
    protected $fillable = [
        'id', 'cluster_name'
    ];

    public function hasilClustering()
    {
        return $this->hasMany(HasilClustering::class, 'cluster');
    }
}
