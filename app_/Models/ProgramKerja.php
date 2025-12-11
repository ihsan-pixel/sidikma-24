<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramKerja extends Model
{
    protected $fillable = [
        'nama_program', 'tanggal_pelaksanaan', 'anggaran', 'keterangan', 'catatan',
    ];
}
