<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Status;
use App\Models\Village;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = Status::all()->pluck('id');

        // $district = District::all()->pluck('id');
        $district = District::where('regency_id', '3212')->pluck('id');

        $village = Village::where('district_id', $district)->pluck('id');




        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 100; $i++) {
            DB::table('penduduks')->insert([
                'nama' => $faker->name,
                'tanggal_lahir' => date('Y-m-d H:i:s'),
                'jenis_kelamin' => $faker->randomElement($array = array('Laki - Laki', 'Perempuan')),
                'agama' => $faker->randomElement($array = array('ISLAM', 'BUDHA', 'KHATOLIK', 'KRISTEN', 'HINDU')),
                'id_status' => $faker->randomElement($status),
                'pekerjaan' => $faker->jobTitle,
                'district_id' => $faker->randomElement($district),
                'village_id' => $faker->randomElement($village),
                'alamat_lengkap' => $faker->address,
                'longitude' => $faker->longitude(),
                'latitude' => $faker->latitude(),
                // 'created_at' => date('Y-m-d H:i:s'),
                // 'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
