<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('role', 11);
            $table->string('nama_karyawan', 255);
            $table->string('email', 255)->unique();
            $table->string('jabatan', 255);
            $table->string('nik', 255)->unique();
            $table->string('password', 255);
            $table->string('foto')->nullable();
            $table->string('alamat', 255);
            $table->string('nomor_hp', 255);
            $table->string('tanda_tangan', 255);
            $table->string('nama_bagian', 255);
            $table->integer('jumlah_izin')->nullable();
            $table->integer('jumlah_cuti')->nullable();
            $table->integer('jumlah_tukar_jaga')->nullable();
            $table->timestamps();
            $table->date('updated_at')->nullable();
            $table->date('created_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
