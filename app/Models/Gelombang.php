<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Pendaftar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gelombang extends Model
{
    use HasFactory;

    protected $table = 'gelombang';

    protected $fillable = [
        'tahun_id',
        'kode_gelombang',
        'gelombang',
        'tgl_mulai',
        'tgl_selesai',
        'test_mulai',
        'test_selesai',
        'wawancara_mulai',
        'wawancara_selesai',
        'her_mulai',
        'her_selesai',
        'almamater_mulai',
        'almamater_selesai',
        'pembekalan'
    ];

    protected $dates = [
        'tgl_mulai',
        'tgl_selesai',
        'test_mulai',
        'test_selesai',
        'wawancara_mulai',
        'wawancara_selesai',
        'her_mulai',
        'her_selesai',
        'almamater_mulai',
        'almamater_selesai',
        'pembekalan'
    ];

    public function pendaftar()
    {
        return $this->hasMany(Pendaftar::class);
    }

    public function setTanggalMulaiAttribute($value)
    {
        $this->attributes['tanggal_mulai'] = Carbon::createFromFormat('d-m-Y', $value);
    }

    public function setTanggalSelesaiAttribute($value)
    {
        $this->attributes['tgl_selesai'] = Carbon::createFromFormat('d-m-Y', $value);
    }

    public function setTestMulaiAttribute($value)
    {
        $this->attributes['test_mulai'] = Carbon::createFromFormat('d-m-Y', $value);
    }

    public function setTestSelesaiAttribute($value)
    {
        $this->attributes['test_selesai'] = Carbon::createFromFormat('d-m-Y', $value);
    }

    public function setWawancaraMulaiAttribute($value)
    {
        $this->attributes['wawancara_mulai'] = Carbon::createFromFormat('d-m-Y', $value);
    }

    public function setWawancaraSelesaiAttribute($value)
    {
        $this->attributes['wawancara_selesai'] = Carbon::createFromFormat('d-m-Y', $value);
    }

    public function setHerMulaiAttribute($value)
    {
        $this->attributes['her_mulai'] = Carbon::createFromFormat('d-m-Y', $value);
    }

    public function setHerSelesaiAttribute($value)
    {
        $this->attributes['her_selesai'] = Carbon::createFromFormat('d-m-Y', $value);
    }

    public function setAlmamaterMulaiAttribute($value)
    {
        $this->attributes['almamater_mulai'] = Carbon::createFromFormat('d-m-Y', $value);
    }

    public function setAlmamaterSelesaiAttribute($value)
    {
        $this->attributes['almamater_selesai'] = Carbon::createFromFormat('d-m-Y', $value);
    }

    public function setPembekalanAttribute($value)
    {
        $this->attributes['pembekalan'] = Carbon::createFromFormat('d-m-Y', $value);
    }

}
