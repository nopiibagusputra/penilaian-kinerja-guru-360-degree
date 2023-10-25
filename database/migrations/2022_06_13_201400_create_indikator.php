<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndikator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikator', function (Blueprint $table) {
            $table->increments('id_indikator')->unsigned()->index();
            $table->integer('id_kompetensi')->unsigned()->index();
            $table->string('nama_indikator');
        });

        Schema::table('indikator', function ($table) {
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
        Schema::dropIfExists('indikator');
    }
}
