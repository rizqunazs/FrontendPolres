<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'Status'; 
    protected $fillable = [
        'tgl', 
        'pendaftar',
        'kategori',
        'status'
    ]; 
    
    public $timestamps = false;
    
    public function pendaftar()
    {
        return $this->hasMany(Pendaftar::class);
    }
}
