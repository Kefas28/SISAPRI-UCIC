<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $primaryKey = 'id_peminjaman';
    protected $fillable = [
        'role',
        'nama_jenis_kegiatan',
        'tanggal_kegiatan',
        'waktu_kegiatan',
        'jumlah_peserta',
        'ruang_keterangan',
        'hari_peminjaman',
        'ruangan',
        'status'
    ];
}
