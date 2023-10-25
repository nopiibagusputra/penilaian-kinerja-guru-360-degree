<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePernyataanKuisioner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pernyataan_kuisioner', function (Blueprint $table) {
            $table->increments('id_pernyataan')->unsigned()->index();
            $table->integer('id_komponen')->unsigned()->index();
            $table->string('nama_pernyataan');
        });

        Schema::table('pernyataan_kuisioner', function ($table) {
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
        Schema::dropIfExists('pernyataan_kuisioner');
    }
}
