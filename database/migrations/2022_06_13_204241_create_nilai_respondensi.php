<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiRespondensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_respondensi', function (Blueprint $table) {
            $table->increments('id_nilai_respondensi')->unsigned()->index();
            $table->integer('id_kode_respondensi')->unsigned()->index();
            $table->integer('id_guru')->unsigned()->index();
            $table->integer('jumlah_skor_respondensi');
            $table->float('nilai_respondensi');
        });

        Schema::table('nilai_respondensi', function ($table) {
            $table->foreign('id_guru')->references('id_guru')->on('guru')->onDelete('cascade');
            $table->foreign('id_kode_respondensi')->references('id_kode_respondensi')->on('kode_respondensi')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_respondensi');
    }
}
