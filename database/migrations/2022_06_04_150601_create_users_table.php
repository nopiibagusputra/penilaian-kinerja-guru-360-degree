<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_users')->unsigned()->index();
            $table->integer('id_guru')->nullable()->unsigned()->index();
            $table->integer('id_siswa')->nullable()->unsigned()->index();
            // $table->string('name');
            $table->string('level');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('active');
            // $table->string('verificationcode');
            $table->timestamps();
        });

        Schema::table('users', function ($table) {
            $table->foreign('id_guru')->references('id_guru')->on('guru')->onDelete('cascade');
            $table->foreign('id_siswa')->references('id_siswa')->on('siswa')->onDelete('cascade');
        });

        
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
