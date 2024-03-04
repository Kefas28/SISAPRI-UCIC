<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $table = 'ruang';
    public $primaryKey = "id_ruang";
    protected $fillable = ['nama_ruang', 'gedung', 'lokasi', 'kapasitas', 'lantai', 'gambar'];
}
