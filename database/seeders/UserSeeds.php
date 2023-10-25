<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UserSeeds extends Seeder
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
        User::truncate();
        User::create([
            'id_guru'  => 1,
            'level' => 'admin',
            'active'=> '1',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            // 'verificationcode' => Str::random(20),
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
