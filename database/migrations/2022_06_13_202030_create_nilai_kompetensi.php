<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiKompetensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_kompetensi', function (Blueprint $table) {
            $table->increments('id_nilai_kompetensi')->unsigned()->index();
            $table->integer('id_guru')->unsigned()->index();
            $table->integer('id_kompetensi')->unsigned()->index();
            $table->integer('jumlah_skor_kompetensi');
            $table->float('nilai_kompetensi');
        });

        Schema::table('nilai_kompetensi', function ($table) {
            $table->foreign('id_guru')->references('id_guru')->on('guru')->onDelete('cascade');
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
        Schema::dropIfExists('nilai_kompetensi');
    }
}
