<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('user_id')->unsigned();
            $table->date('tanggal');
            // $table->string('signature'); 
            $table->string('npm');
            $table->unsignedBigInteger('tahun_id');
            $table->unsignedBigInteger('gelombang_id');
            $table->unsignedBigInteger('prodi_id');
            $table->integer('semester');
            $table->string('nama');
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->string('gender');
            $table->unsignedBigInteger('agama_id');
            $table->integer('nik');
            $table->unsignedBigInteger('kawin');
            $table->enum('bekerja', ['bekerja', 'belum_bekerja'])->default('belum_bekerja');
            $table->text('asal_jalan');
            $table->string('asal_dusun');
            $table->string('asal_rt');
            $table->string('asal_rw');
            $table->unsignedBigInteger('asal_kelurahan');
            $table->unsignedBigInteger('asal_kecamatan');
            $table->unsignedBigInteger('asal_kabupaten');
            $table->integer('asal_kodepos');
            $table->unsignedBigInteger('asal_provinsi');
            $table->string('telp');
            $table->string('hp');
            $table->string('email');
            $table->enum('kps', ['punya', 'tidak_punya'])->default('tidak_punya');
            $table->string('no_kps');
            $table->integer('ijazah')->unsigned();
            $table->integer('tahun');
            $table->string('jurusan');
            $table->string('asal_sekolah');
            $table->unsignedBigInteger('kota_sekolah');
            $table->string('ayah_nama');
            $table->date('ayah_tgl_lhr');
            $table->integer('ayah_pendidikan')->unsigned();
            $table->integer('ayah_pekerjaan')->unsigned();
            $table->integer('ayah_penghasilan')->unsigned();
            $table->string('ibu_nama');
            $table->date('ibu_tgl_lhr');
            $table->integer('ibu_pendidikan')->unsigned();
            $table->integer('ibu_pekerjaan')->unsigned();
            $table->integer('ibu_penghasilan')->unsigned();
            $table->string('wali_nama');
            $table->date('wali_tgl_lhr');
            $table->integer('wali_pendidikan')->unsigned();
            $table->integer('wali_pekerjaan')->unsigned();
            $table->integer('wali_penghasilan')->unsigned();
            $table->string('kk_mahasiswa');
            $table->string('kk_ayah');
            $table->string('kk_ibu');
            $table->string('foto');
            $table->enum('status',['aktif','tidak_aktif'])->default('tidak_aktif');
            $table->timestamp('last_update')->nullable();
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('user');
            // $table->foreign('tahun_id')->references('id')->on('tahun');
            // $table->foreign('gelombang_id')->references('id')->on('gelombang');
            // $table->foreign('prodi_id')->references('id')->on('prodi');
            // $table->foreign('agama_id')->references('id')->on('agama');
            // $table->foreign('kawin')->references('id')->on('kawin');
            // $table->foreign('kota_sekolah')->references('id')->on('kota_sekolah');
            // $table->foreign('asal_kelurahan')->references('id')->on('asal_kelurahan');
            // $table->foreign('asal_kecamatan')->references('id')->on('asal_kecamatan');
            // $table->foreign('asal_kabupaten')->references('id')->on('asal_kabupaten');
            // $table->foreign('asal_provinsi')->references('id')->on('asal_provinsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
