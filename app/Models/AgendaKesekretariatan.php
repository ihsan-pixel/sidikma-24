<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaKesekretariatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kegiatan',
        'tanggal_pelaksanaan',
        'petugas',
        'keterangan',
        'catatan',
    ];
}
