<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $fillable = ['nama', 'tipe', 'kapasitas'];

    public function admin()
    {
        return $this->hasMany(Admin::class);
    }
}
