<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->increments('id_guru')->unsigned()->index();
            $table->integer('id_mapel')->unsigned()->index();
            $table->string('nama');
            $table->string('nip');
            $table->bigInteger('nomor_seri_karpeg');
            $table->bigInteger('nuptk');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pangkat');
            $table->date('tmt_golongan');
            $table->date('tmt_guru');
            $table->date('tmt_sekolah');
            $table->string('pendidikan');
            $table->char('jk')->length(1);
            $table->string('program_keahlian');
            $table->date('tanggal_sk');
            $table->char('status')->length(1);
            $table->string('nomor_sk_penugasan');

        });

        Schema::table('guru', function ($table) {
            // $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->foreign('id_mapel')->references('id_mapel')->on('mapel')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guru');
    }
}
