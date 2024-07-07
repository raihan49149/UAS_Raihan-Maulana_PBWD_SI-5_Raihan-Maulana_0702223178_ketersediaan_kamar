<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['id_pasien', 'id_room', 'tgl_masuk', 'tgl_keluar'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}
