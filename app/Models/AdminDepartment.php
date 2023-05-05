<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminDepartment extends Model
{
    use HasFactory;
    protected $table = 'admin_departments';
    protected $fillable = ['nama', 'alamat'];

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
}
