<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratIzin extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pengaju','waktu',
        'durasi',
        'keterangan','bukti',
        'status',
        'tanda_tangan',
        'file', 'tanggal_mulai' , 'tanggal_dibuat'
    ];

}
