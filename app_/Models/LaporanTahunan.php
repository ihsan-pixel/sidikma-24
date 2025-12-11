<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanTahunan extends Model
{
    protected $table = 'laporan_tahunan';

    protected $fillable = ['tahun', 'file_program', 'file_keuangan'];

    public $timestamps = false;
}
