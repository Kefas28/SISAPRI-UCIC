<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KontenPrasarana extends Model
{
    protected $table = 'konten_prasarana';
    protected $primaryKey = 'id_konten_prasarana';
    protected $fillable = ['judul', 'deskripsi', 'gambar', 'keterangan'];
}
