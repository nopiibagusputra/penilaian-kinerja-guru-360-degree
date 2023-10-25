<?php

namespace Database\Seeders;
use App\Models\SiswaModel;
use Illuminate\Support\Facades\Schema;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class SiswaSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        Schema::disableForeignKeyConstraints();
        SiswaModel::truncate();
        for($kelas = 1; $kelas <= 36; $kelas++){
            for($i = 1; $i <= 30; $i++){
                SiswaModel::create([
                    'id_kelas'  => $kelas,
                    'nis'       => $faker->unique()->numberBetween(1200+($kelas*30), 1250+($kelas*30)),
                    'nama_siswa' => $faker->firstName." ".$faker->lastName,
                ]);
            }
        }
        /*
        for($i = 1; $i <= 30; $i++){
            SiswaModel::create([
                'id_kelas'  => 1,
                'nis'       => $faker->unique()->numberBetween(1200, 1230),
                'nama_siswa' => $faker->firstName." ".$faker->lastName,
            ]);
        }

        for($i = 1; $i <= 30; $i++){
            SiswaModel::create([
                'id_kelas'  => 2,
                'nis'       => $faker->unique()->numberBetween(1231, 1260),
                'nama_siswa' => $faker->firstName." ".$faker->lastName,
            ]);
        }

        for($i = 1; $i <= 30; $i++){
            SiswaModel::create([
                'id_kelas'  => 3,
                'nis'       => $faker->unique()->numberBetween(1261, 1290),
                'nama_siswa' => $faker->firstName." ".$faker->lastName,
            ]);
        }

        for($i = 1; $i <= 30; $i++){
            SiswaModel::create([
                'id_kelas'  => 4,
                'nis'       => $faker->unique()->numberBetween(1291, 1320),
                'nama_siswa' => $faker->firstName." ".$faker->lastName,
            ]);
        }

        for($i = 1; $i <= 30; $i++){
            SiswaModel::create([
                'id_kelas'  => 5,
                'nis'       => $faker->unique()->numberBetween(1321, 1350),
                'nama_siswa' => $faker->firstName." ".$faker->lastName,
            ]);
        }
        */
        Schema::enableForeignKeyConstraints();
    }
}
