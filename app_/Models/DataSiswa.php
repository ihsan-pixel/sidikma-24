<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    protected $table = 'data_siswa';
    protected $fillable = [
        'madrasah_id','tahun_pelajaran', 'kelas1','kelas2','kelas3',
        'kelas4','kelas5','kelas6','kelas7',
        'kelas8','kelas9','total'
    ];

    public function madrasah()
    {
        return $this->belongsTo(Kelas::class, 'madrasah_id');
    }

}
