<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_pelajaran');
            $table->integer('kelas1')->default(0);
            $table->integer('kelas2')->default(0);
            $table->integer('kelas3')->default(0);
            $table->integer('kelas4')->default(0);
            $table->integer('kelas5')->default(0);
            $table->integer('kelas6')->default(0);
            $table->integer('kelas7')->default(0);
            $table->integer('kelas8')->default(0);
            $table->integer('kelas9')->default(0);
            $table->integer('total')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_siswa');
    }
};
