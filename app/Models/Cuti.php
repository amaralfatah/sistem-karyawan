<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;

    protected $fillable = [
        'karyawan_id',
        'tanggal_mulai',
        'tanggal_berakhir',
        'keterangan',
        'jenis_cuti',
    ];

    // Relasi ke karyawans
    public function karyawans(){
        return $this->hasMany(Karyawan::class);
    }
}
