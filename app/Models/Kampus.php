<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    protected $table = 'kampus';
    public $primaryKey = "id_kampus";
    protected $fillable = ['lokasi', 'alamat', 'luas_tanah', 'gambar'];
}
