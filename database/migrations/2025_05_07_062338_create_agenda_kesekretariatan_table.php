<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaKesekretariatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda_kesekretariatan', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan');
            $table->date('tanggal_pelaksanaan');
            $table->string('petugas');
            $table->string('keterangan')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda_kesekretariatan');
    }
}
