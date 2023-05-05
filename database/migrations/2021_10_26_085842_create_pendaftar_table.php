<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_daftar');
            $table->bigInteger('tahun_id');
            $table->bigInteger('gelombang_id')->unsigned();
            $table->string('no_pendaftaran');
            $table->integer('jenis');
            $table->string('nama', 75);
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->bigInteger('agama_id')->unsigned();
            $table->string('tmp_lhr', 50);
            $table->date('tgl_lhr');
            $table->string('alamat', 75);
            $table->string('telp', 15);
            $table->bigInteger('pendidikan_akhir')->unsigned();
            $table->integer('pendidikan_akhir_tahun');
            $table->string('pendidikan_akhir_jurusan');
            $table->string('pendidikan_akhir_nama');
            $table->decimal('nilai_rata', 10, 2);
            $table->string('ortu_nama', 50);
            $table->bigInteger('ortu_kerja')->unsigned();
            $table->string('ortu_alamat', 75);
            $table->string('ortu_telp', 15);
            $table->string('jurusan1');
            $table->string('jurusan2');
            $table->string('jurusan_diterima');
            $table->string('rekomendasi_nim', 15)->nullable();
            $table->string('rekomendasi_nama', 25)->nullable();
            $table->string('rekomendasi_hp', 15)->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign('gelombang_id')->references('id')->on('gelombang');
            $table->foreign('agama_id')->references('id')->on('agama');
            $table->foreign('ortu_kerja')->references('id')->on('pekerjaan');
            $table->foreign('pendidikan_akhir')->references('id')->on('pendidikan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftar');
    }
}
