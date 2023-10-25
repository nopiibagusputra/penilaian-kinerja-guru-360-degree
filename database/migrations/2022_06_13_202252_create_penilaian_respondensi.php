<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianRespondensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_respondensi', function (Blueprint $table) {
            $table->increments('id_penilaian_resndensi')->unsigned()->index();
            $table->integer('id_guru')->unsigned()->index();
            $table->integer('id_kode_respondensi')->unsigned()->index();
            $table->integer('id_komponen')->unsigned()->index();
            $table->integer('skor_penilaian');
        });

        Schema::table('penilaian_respondensi', function ($table) {
            $table->foreign('id_guru')->references('id_guru')->on('guru')->onDelete('cascade');
            $table->foreign('id_kode_respondensi')->references('id_kode_respondensi')->on('kode_respondensi')->onDelete('cascade');
            $table->foreign('id_komponen')->references('id_komponen')->on('komponen_kuisioner')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaian_respondensi');
    }
}
