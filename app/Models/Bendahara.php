<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bendahara extends Model
{
    protected $table = 'bendaharas';

    protected $fillable = [
        'tanggal', 'uraian', 'pemasukan', 'pengeluaran', 'bukti_transaksi',
    ];
}
