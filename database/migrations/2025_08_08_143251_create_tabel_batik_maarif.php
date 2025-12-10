<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('batik_maarif', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asal_sekolah');
            $table->integer('tahun');
            $table->integer('siswa');
            $table->integer('guru_2m');
            $table->integer('guru_25m');
            $table->decimal('harga', 15, 2);
            $table->decimal('total_tagihan', 15, 2);
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_batik_maarif');
    }
};
