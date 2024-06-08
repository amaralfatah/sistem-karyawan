<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_jabatan',
        'jam_kerja',
        'note_pekerjaan',
        'gaji_pokok',
        'tunjangan',
        'potongan',
    ];

    //  Relasi ke karyawans
    public function karyawans(){
        return $this->belongsTo(Karyawan::class);
    }
}
