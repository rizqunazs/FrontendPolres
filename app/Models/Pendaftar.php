<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Agama;
use App\Models\Prodi;
use App\Models\Status;
use App\Models\Gelombang;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendaftar extends Model
{
    use HasFactory;

    protected $table = 'pendaftar';

    protected $fillable = [
        'signature',
        'tgl_daftar',
        'tahun_id',
        'gelombang_id',
        'no_pendaftaran',
        'jenis',
        'nama',
        'gender',
        'agama_id',
        'tmp_lhr',
        'tgl_lhr',
        'alamat',
        'telp',
        'pendidikan_akhir',
        'pendidikan_akhir_tahun',
        'pendidikan_akhir_jurusan',
        'pendidikan_akhir_nama',
        'nilai_rata',
        'ortu_nama',
        'ortu_kerja',
        'ortu_alamat',
        'ortu_telp',
        'jurusan1',
        'jurusan2',
        'jurusan_diterima',
        'rekomendasi_nim',
        'rekomendasi_nama',
        'rekomendasi_hp',
        'status'
    ];

    protected $dates = [
        'tgl_daftar',
        'tgl_lhr'
    ];

    public function gelombang()
    {
        return $this->belongsTo(Gelombang::class);
    }

    public function agama()
    {
        return $this->belongsTo(Agama::class);
    }

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class);
    }

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class);
    }

    public function jurusan1()
    {
        return $this->belongsTo(Prodi::class, 'jurusan1');
    }

    public function jurusan2()
    {
        return $this->belongsTo(Prodi::class, 'jurusan2');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status');
    }

    public function setTanggalDaftarAttribute($value)
    {
        $this->attributes['tgl_daftar'] = Carbon::createFromFormat('d-m-Y', $value);
    }

    public function setTanggalLahirAttribute($value)
    {
        $this->attributes['tgl_lhr'] = Carbon::createFromFormat('d-m-Y', $value);
    }
}
