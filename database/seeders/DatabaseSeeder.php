<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         //$this->call(UserSeeds::class);
        // $this->call(GuruSeeds::class);
         $this->call(SiswaSeeds::class);
        //  $this->call(KelasSeeds::class);
        //  $this->call(MapelSeeds::class);
    }
}
