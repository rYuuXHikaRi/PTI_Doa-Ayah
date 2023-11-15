<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SuratCuti extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'cuti';

    protected $fillable = [
        'user_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'bagian',
        'alamat',
        'jabatan',
        'keterangan',
        'status',
        'file',
        'file', 'tanggal_mulai' , 'tanggal_selesai' ,'bagian', 'tanggal_izin'
    ];
    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
    ];
}
