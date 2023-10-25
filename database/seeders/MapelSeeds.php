<?php

namespace Database\Seeders;

use App\Models\MapelModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class MapelSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Schema::disableForeignKeyConstraints();
        MapelModel::truncate();
        MapelModel::create([
            'nama_mapel' => 'Matematika',
        ]);
        MapelModel::create([
            'nama_mapel' => 'Bahasa Indonesia',
        ]);
        MapelModel::create([
            'nama_mapel' => 'Bahasa Inggris',
        ]);
        MapelModel::create([
            'nama_mapel' => 'IPA',
        ]);
        MapelModel::create([
            'nama_mapel' => 'IPS',
        ]);
        MapelModel::create([
            'nama_mapel' => 'Pendidikan Agama',
        ]);
        MapelModel::create([
            'nama_mapel' => 'Pendidikan Kewarganegaraan',
        ]);
        MapelModel::create([
            'nama_mapel' => 'Pendidikan Jasmani dan Kesehatan',
        ]);
        MapelModel::create([
            'nama_mapel' => 'Pendidikan Ekonomi dan Bisnis',
        ]);
        MapelModel::create([
            'nama_mapel' => 'Pendidikan Fisika',
        ]);
        MapelModel::create([
            'nama_mapel' => 'Pendidikan Kimia',
        ]);
        MapelModel::create([
            'nama_mapel' => 'Pendidikan Biologi',
        ]);
        MapelModel::create([
            'nama_mapel' => 'Pendidikan Bahasa Jawa',
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
