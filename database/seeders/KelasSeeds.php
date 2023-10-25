<?php

namespace Database\Seeders;

use App\Models\KelasModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;


class KelasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        //buat user admin
        KelasModel::truncate();
        for($i = 1; $i <= 8; $i++){
            KelasModel::create([
                'nama_kelas' => 'X-MIPA-'.$i,
            ]);
        }
        for($i = 1; $i <= 4; $i++){
            KelasModel::create([
                'nama_kelas' => 'X-IPS-'.$i,
            ]);
        }
        for($i = 1; $i <= 8; $i++){
            KelasModel::create([
                'nama_kelas' => 'XI-MIPA-'.$i,
            ]);
        }
        for($i = 1; $i <= 4; $i++){
            KelasModel::create([
                'nama_kelas' => 'XI-IPS-'.$i,
            ]);
        }
        for($i = 1; $i <= 8; $i++){
            KelasModel::create([
                'nama_kelas' => 'XII-MIPA-'.$i,
            ]);
        }
        for($i = 1; $i <= 4; $i++){
            KelasModel::create([
                'nama_kelas' => 'XII-IPS-'.$i,
            ]);
        }
       

        Schema::enableForeignKeyConstraints();
    }
}
