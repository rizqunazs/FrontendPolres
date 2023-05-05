<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tahun extends Model
{
    use HasFactory;
    protected $table = 'tahun';
    protected $fillable = ['tahun', 'status'];
    public $timestamps = false;

    public function setNamaAttribute($tahun)
    {
        return $this->attributes['tahun'] = Str::ucfirst($tahun);
    }
    // public function tahun()
    // {
    //     return $this->belongsTo(Gelombang::class);
    // }


}
