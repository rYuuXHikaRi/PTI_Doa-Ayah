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
        Schema::create('template_SK', function (Blueprint $table) {
            $table->id();
            $table->string('perimal');
            $table->string('hari_tanggal');
            $table->date('waktu');
            $table->string('tempat');
            $table->string('tanggal_surat');
            $table->string('pembuat_surat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_s_k_s');
    }
};
