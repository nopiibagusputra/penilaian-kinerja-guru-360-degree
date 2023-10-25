<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkorKompetensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skor_kompetensi', function (Blueprint $table) {
            $table->increments('id_skor_kompetensi')->unsigned()->index();
            $table->integer('id_guru')->unsigned()->index();
            $table->integer('id_indikator')->unsigned()->index();
            $table->integer('id_kompetensi')->unsigned()->index();
            $table->integer('skor_kompetensi');
        });

        Schema::table('skor_kompetensi', function ($table) {
            $table->foreign('id_guru')->references('id_guru')->on('guru')->onDelete('cascade');
            $table->foreign('id_indikator')->references('id_indikator')->on('indikator')->onDelete('cascade');
            $table->foreign('id_kompetensi')->references('id_kompetensi')->on('kode_kompetensi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skor_kompetensi');
    }
}
