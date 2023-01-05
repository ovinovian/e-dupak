<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarDetail extends Model
{
    use HasFactory;

    protected $table = "detail_daftars";

    protected $fillable = [
        'id_jadwal',
        'id_butir',
        'nilai',
        'nip',
    ];
}