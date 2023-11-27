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
        Schema::create('tukar_jaga', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengaju');
            $table->string('target_tukar_jaga');
            $table->string('file');
            $table->string('tanda_tangan');
            $table->string('keterangan',50);
            $table->date('jadwal_asli');
            $table->string('status');
            $table->date('jadwal_dirubah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_tukar_jagas');
    }
};
