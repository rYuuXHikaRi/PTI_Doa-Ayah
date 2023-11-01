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
        Schema::create('arsips', function (Blueprint $table) {
            $table->id();
            $table->string('nama_arsip');
            $table->string('kode_arsip');
            $table->string('perihal');
            $table->string('kategori');
            $table->date('tanggal_terbit');
            $table->date('tanggal_selesai');
            $table->string('lokasi_arsip');
            $table->string('file');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arips');
    }
};
