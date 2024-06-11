<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_karyawan',
        'status_absen',
        'keterangan',
        'tanggal_absensi',
        'time',
    ];

    public function karyawan(){
        return $this->hasMany(Karyawan::class);
    }
}
