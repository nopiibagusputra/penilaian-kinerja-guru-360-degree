<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasAjar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_ajar', function (Blueprint $table) {
            $table->increments('id_kelas_ajar')->unsigned()->index();
            $table->integer('id_kelas')->unsigned()->index();
            $table->integer('id_guru')->unsigned()->index();
        });

        Schema::table('kelas_ajar', function ($table) {
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas')->onDelete('cascade');
            $table->foreign('id_guru')->references('id_guru')->on('guru')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas_ajar');
    }
}
