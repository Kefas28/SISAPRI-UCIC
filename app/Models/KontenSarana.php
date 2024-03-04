<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KontenSarana extends Model
{
    protected $table = 'konten_sarana';
    protected $primaryKey = 'id_konten_sarana';
    protected $fillable = ['judul', 'deskripsi', 'gambar', 'keterangan'];
}
