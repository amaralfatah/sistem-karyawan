<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'jenis_kelamin',
        'telephone',
        'status',
        'jabatan_id',
        'ktp',
        'NPWP',
        'total_kontak',
    ];

    // Relasi dengan Jabatan
    // public function jabatan()
    // {
    //     return $this->belongsTo(Jabatan::class);
    // }

    // Relasi dengan Absensi~
    // public function absensis()
    // {
    //     return $this->hasMany(Absensi::class);
    // }

    // Relasi dengan Cuti
    // public function cuties()
    // {
    //     return $this->hasMany(Cuti::class);
    // }

    // Relasi dengan Gaji
    // public function gajies()
    // {
    //     return $this->hasMany(Gaji::class);
    // }
}
