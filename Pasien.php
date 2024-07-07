<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = ['nama', 'kelamin', 'tgl_lahir', 'no_HP'];

    public function admin()
    {
        return $this->hasMany(Admin::class);
    }
}
