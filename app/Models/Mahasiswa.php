<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [

        'user_id',
        'tanggal',
        'tahun_id',
        'gelombang_id',
        'npm',
        'status_mahasiswa',
        'prodi_id',
        'semester',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'gender',
        'agama_id',
        'nik',
        'kawin',
        'bekerja',
        'asal_jalan',
        'asal_dusun',
        'asal_rt',
        'asal_rw',
        'asal_kelurahan',
        'asal_kecamatan',
        'asal_kabupaten',
        'asal_kodepos',
        'asal_provinsi',
        'telp',
        'hp',
        'email',
        'kps',
        'no_kps',
        'ijazah',
        'tahun',
        'jurusan',
        'asal_sekolah',
        'kota_sekolah',
        'ayah_nama',
        'ayah_tgl_lhr',
        'ayah_pendidikan',
        'ayah_pekerjaan',
        'ayah_penghasilan',
        'ibu_nama',
        'ibu_tgl_lhr',
        'ibu_pendidikan',
        'ibu_pekerjaan',
        'ibu_penghasilan',
        'wali_nama',
        'wali_tgl_lhr',
        'wali_pendidikan',
        'wali_pekerjaan',
        'wali_penghasilan',
        'kk_mahasiswa',
        'kk_ayah',
        'kk_ibu',
        'foto',
        'status',
        'last_update',
        
    ];


    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class);
    }

    public function agama()
    {
        return $this->belongsTo(Agama::class);
    }

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class);
    }

    public function regency()
    {
        return $this->belongsTo(Regency::class);
    }

    public function provinces()
    {
        return $this->belongsTo(Province::class);
    }

    public function status_kawin()
    {
        return $this->belongsTo(StatusKawin::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }

    //morphtomany

  
}
