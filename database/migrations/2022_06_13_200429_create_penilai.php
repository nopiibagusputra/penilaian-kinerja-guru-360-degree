<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilai', function (Blueprint $table) {
            $table->increments('id_penilai')->unsigned()->index();
            $table->integer('id_guru')->unsigned()->index();
            $table->integer('id_guru_penilai')->unsigned()->index();
            $table->string('nomor_sk_penugasan_penilai');
            $table->date('tanggal_sk_penilai');
            $table->date('tanggal_berlaku_sk');
            $table->string('tahun_penilaian');
            $table->char('status_formatif')->length(1);
            $table->char('status_sumatif')->length(1);
            $table->date('tanggal_penilaian');
            $table->date('periode_penilaian_awal');
            $table->date('periode_penilaian_akhir');
        });

        Schema::table('penilai', function ($table) {
            $table->foreign('id_guru')->references('id_guru')->on('guru')->onDelete('cascade');
            $table->foreign('id_guru_penilai')->references('id_guru')->on('guru')->onDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilai');
    }
}
