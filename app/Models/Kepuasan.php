<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kepuasan extends Model
{
    protected $table = 'kepuasan';
    protected $primaryKey = 'id_kepuasan';
    protected $fillable = [
        'no', 'role', 'soal_1', 'soal_2', 'soal_3', 'soal_4', 'soal_5', 'soal_6', 'soal_7', 'soal_8',
        'soal_9', 'soal_10', 'soal_11', 'soal_12', 'soal_13', 'soal_14', 'soal_15', 'soal_16',
        'soal_17', 'soal_18', 'soal_19', 'soal_20', 'soal_21', 'soal_22', 'soal_23', 'soal_24', 'soal_25',
    ];
}
