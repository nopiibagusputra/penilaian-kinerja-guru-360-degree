<?php

namespace Database\Seeders;

use App\Models\GuruModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Faker\Factory as Faker;

class GuruSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        Schema::disableForeignKeyConstraints();
        GuruModel::truncate();
        GuruModel::create([
            'nama' => 'Admin',
            'jk'        => $faker->randomElement(['1', '2']),
            'tempat_lahir' => $faker->city,
            'tanggal_lahir' => $faker->dateTimeBetween('-30 years', '-20 years')->format('Y-m-d'),
            'id_mapel' => $faker->numberBetween(1, 10),
            'nip' => 'admin@admin.com',
            'nomor_seri_karpeg' => $faker->numberBetween(1, 100),
            'nuptk' => $faker->numberBetween(1, 100),
            'pangkat' => $faker->randomElement(['I/a', 'I/b', 'I/c', 'I/d', 'II/a', 'II/b', 'II/c', 'II/d', 'III/a', 'III/b', 'III/c', 'III/d', 'IV/a', 'IV/b', 'IV/c', 'IV/d']),
            'tmt_golongan' =>$faker->dateTimeBetween('-30 years', '-20 years')->format('Y-m-d'),
            'tmt_guru' => $faker->dateTimeBetween('-30 years', '-20 years')->format('Y-m-d'),
            'tmt_sekolah' => $faker->dateTimeBetween('-30 years', '-20 years')->format('Y-m-d'),
            'pendidikan' => $faker->randomElement(['S1', 'S2', 'S3', 'S4', 'S5', 'S6']),
            'id_mapel' => $faker->numberBetween(1, 10),
            'nomor_sk_penugasan' => $faker->numberBetween(1, 100),
            'program_keahlian' => $faker->numberBetween(1, 10),
            'tanggal_sk' => $faker->dateTimeBetween('-30 years', '-20 years')->format('Y-m-d'),
            'status' => 1, // 1 = aktif guru, 0 pensiun, 2 aktif kepala sekolah
        ]);
        // for($i = 1; $i <= 30; $i++){
        //     GuruModel::create([
        //         'nama' => $faker->name,
        //         'jk'        => $faker->randomElement(['1', '2']),
        //         'tempat_lahir' => $faker->city,
        //         'tanggal_lahir' => $faker->dateTimeBetween('-30 years', '-20 years')->format('Y-m-d'),
        //         'id_mapel' => $faker->numberBetween(1, 10),
        //         'nip' => $faker->unique()->numberBetween(1, 100),
        //         'nomor_seri_karpeg' => $faker->numberBetween(1, 100),
        //         'nuptk' => $faker->numberBetween(1, 100),
        //         'pangkat' => $faker->randomElement(['I/a', 'I/b', 'I/c', 'I/d', 'II/a', 'II/b', 'II/c', 'II/d', 'III/a', 'III/b', 'III/c', 'III/d', 'IV/a', 'IV/b', 'IV/c', 'IV/d']),
        //         'tmt_golongan' =>$faker->dateTimeBetween('-30 years', '-20 years')->format('Y-m-d'),
        //         'tmt_guru' => $faker->dateTimeBetween('-30 years', '-20 years')->format('Y-m-d'),
        //         'tmt_sekolah' => $faker->dateTimeBetween('-30 years', '-20 years')->format('Y-m-d'),
        //         'pendidikan' => $faker->randomElement(['S1', 'S2', 'S3', 'S4', 'S5', 'S6']),
        //         'id_mapel' => $faker->numberBetween(1, 10),
        //         'nomor_sk_penugasan' => $faker->numberBetween(1, 100),
        //         'program_keahlian' => $faker->numberBetween(1, 10),
        //         'tanggal_sk' => $faker->dateTimeBetween('-30 years', '-20 years')->format('Y-m-d'),
        //         'status' => 1, // 1 = aktif guru, 0 pensiun, 2 aktif kepala sekolah
        //     ]);
        // }
        Schema::enableForeignKeyConstraints();
    }
}
