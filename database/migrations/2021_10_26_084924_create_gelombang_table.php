<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGelombangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gelombang', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun_id');
            $table->string('kode_gelombang');
            $table->string('gelombang');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->date('test_mulai');
            $table->date('test_selesai');
            $table->date('wawancara_mulai');
            $table->date('wawancara_selesai');
            $table->date('her_mulai');
            $table->date('her_selesai');
            $table->date('almamater_mulai');
            $table->date('almamater_selesai');
            $table->date('pembekalan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gelombang');
    }
}
