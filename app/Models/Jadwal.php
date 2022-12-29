<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'tahap',
        'daftar_mulai',
        'daftar_selesai',
        'siap_mulai',
        'siap_selesai',
        'nilai_mulai',
        'nilai_selesai',
        'sidang_mulai',
        'sidang_selesai',
    ];
}