<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prodi extends Model
{
    use HasFactory, SoftDeletes; 

    public $table = 'Prodi'; 
    protected $fillable = [
        'fakultas_id',
        'jenjang_id',
        'kode_prodi',
        'prodi',
        'kaprodi'
    ]; 
    public $timestamps = false;
    

    public function pendaftar()
    {
        return $this->hasMany(Pendaftar::class);
    }


    public function jenjang()
    {
        return $this->belongsTo(Pendidikan::class); 
    }

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class); 
    }

}
