<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fakultas extends Model
{
    use HasFactory;
    
    protected $table = 'fakultas';
    protected $fillable = ['kode_fakultas', 'fakultas'];
    public $timestamps = false;

    public function setNamaAttribute($fakultas)
    {
        return $this->attributes['kode_fakultas'] = Str::ucfirst($fakultas);
    }

    public function scopeActive($query)
    {
        // return $query->where('status', static::ACTIVE);
    }

    // public function pemohon()
    // {
    //     return $this->hasMany(Pemohon::class);
    // }
}
