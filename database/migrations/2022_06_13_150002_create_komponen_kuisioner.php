<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomponenKuisioner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komponen_kuisioner', function (Blueprint $table) {
            $table->increments('id_komponen')->unsigned()->index();
            $table->integer('id_responden')->unsigned()->index();
            $table->string('nama_komponen');
        });

        Schema::table('users', function ($table) {
            $table->foreign('id_responden')->references('id_kode_respondensi')->on('kode_respondensi')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komponen_kuisioner');
    }
}
