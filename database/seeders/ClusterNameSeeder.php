<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClusterNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            [
                'id' => 0,
                'cluster_name' => 'Miskin',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 1,
                'cluster_name' => 'Menengah',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'cluster_name' => 'Tidak Miskin',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],


        ];

        DB::table('cluster_names')->insert($name);
    }
}
